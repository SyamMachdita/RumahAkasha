<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Midtrans\Snap;
use App\Models\Menu;
use Midtrans\Config;
use App\Models\Pesanan;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class ReservasiController extends Controller
{
    public function showReservationPage()
{
    $user = Auth::user();
    $existingReservation = Reservasi::where('id_customer', $user->id)
                                    ->where('tanggal', '>=', now()->format('Y-m-d'))
                                    ->first();

    $isPaymentPending = false;
    $snapToken = null;
    $paymentStatus = null;

    if ($existingReservation) {
        $existingReservation->formatted_date = Carbon::parse($existingReservation->tanggal)->format('j F Y');

        $userData = DB::table('users')->select('full_name', 'email')->where('id', $user->id)->first();
        $existingReservation->name = $userData->full_name;
        $existingReservation->email = $userData->email;

        $pesanan = DB::table('pesanans')
            ->join('menus', 'pesanans.id_menu', '=', 'menus.id_menu')
            ->where('pesanans.id_reservasi', $existingReservation->id_reservasi)
            ->select(
                'menus.name as nama_menu',
                'pesanans.jumlah_menu',
                'menus.price as price'
            )
            ->get();

        $pembayaran = Pembayaran::where('id_reservasi', $existingReservation->id_reservasi)->first();

        $existingReservation->pesanan = $pesanan;
        $existingReservation->pembayaran = $pembayaran;
        $paymentStatus = $pembayaran ? $pembayaran->status : null;

        // Check if payment is pending
        if ($pembayaran && ($pembayaran->status !== 'capture' && $pembayaran->status !== 'settlement' && $pembayaran->status !== 'PAID')) {
            $isPaymentPending = true;
        }

        // Midtrans configuration
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = false; // Set to true for production
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Generate payment token only if payment is pending
        if ($isPaymentPending) {
            $order_id = md5(uniqid().$pembayaran->id_pembayaran);
            $params = [
                'transaction_details' => [
                    'order_id' => $order_id,
                    'gross_amount' => $existingReservation->pembayaran->total_harga,
                ],
                'customer_details' => [
                    'first_name' => $existingReservation->name,
                    'email' => $existingReservation->email,
                ],
            ];

            $snapToken = Snap::getSnapToken($params);

            // Save order_id to pembayaran
            $pembayaran->order_id = $order_id;
            $pembayaran->save();
        }
    }

    $menu_coffee = Menu::where('kategori', 'coffee')->get();
    $menu_noncoffee = Menu::where('kategori', 'noncoffee')->get();
    $menu_signature = Menu::where('kategori', 'signature')->get();
    $menu_food = Menu::where('kategori', 'food')->get();

    return view('customer.reserve', [
        'menu_coffee' => $menu_coffee,
        'menu_noncoffee' => $menu_noncoffee,
        'menu_signature' => $menu_signature,
        'menu_food' => $menu_food,
        'existingReservation' => $existingReservation ?? null,
        'snapToken' => $snapToken ?? null,
        'isPaymentPending' => $isPaymentPending,
        'paymentStatus' => $paymentStatus,
    ]);
}




    public function store(Request $request)
    {
        $res = $request->all();
        try {
            $reservasi = Reservasi::create([
                'id_customer' => $res['id_customer'],
                'tempat' => $res['tempat'],
                'jumlah_orang' => $res['jumlah_orang'],
                'tanggal' => $res['tanggal'],
                'jam' => $res['jam'],
                'note' => $res['note'],
            ]);

            Log::info('Reservasi created successfully', ['reservasi' => $reservasi]);

            $totalHarga = 0;
            // Simpan data pesanan jika ada
            // echo "<pre>";
            // print_r($res);
            // echo "</pre>";
            //  die();
            if (sizeof($res['menu'])> 0) {

                foreach ($res['menu'] as $menu) {

                    if($menu['jumlah_menu'] > 0){
                        try{

                            $pesanan = Pesanan::create([
                                'id_customer' => $res['id_customer'],
                                'id_menu' => $menu['id_menu'],
                                'nama_menu' => $menu['nama_menu'],
                                'harga_menu' => $menu['harga_menu'],
                                'jumlah_menu' => $menu['jumlah_menu'],
                                'id_reservasi' => $reservasi->id_reservasi,
                            ]);
                            }catch (QueryException $e) {
                                echo "<pre>";
                                print_r($e->getMessage());
                                echo "</pre>";
                                // Log::error('Error creating reservasi: ' . $e->getMessage(), ['exception' => $e]);
                                // return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat reservasi. Silakan coba lagi.');
                            }
                            Log::info('Pesanan created successfully', ['pesanan' => $pesanan]);

                            $totalHarga += $menu['harga_menu'] * $menu['jumlah_menu'];
                        }
                    }
                // dd($pesanan);
            }

            // Simpan data pembayaran
            $arr_bayar = [
                'id_reservasi' => $reservasi->id_reservasi,
                'id_customer' => $res['id_customer'],
                'total_harga' => $totalHarga,
            ];
            // echo "<pre>";
            // print_r($arr_bayar);
            // echo "</pre>";
            // die();
            $pembayaran = Pembayaran::create($arr_bayar);
            Log::info('Pembayaran created successfully', ['pembayaran' => $pembayaran]);

            return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dibuat.');
        } catch (\Exception $e) {
            Log::error('Error creating reservasi: ' . $e->getMessage(), ['exception' => $e]);
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat reservasi. Silakan coba lagi.');
        }
    }



    public function callback(Request $request)
{
    // Get the JSON data from the request body
    $notification = json_decode($request->getContent(), true);

    // Display the received notification data and stop execution
    dd($notification);

    // The rest of your code won't run because dd() stops execution
    $transaction_status = $notification['transaction_status'];
    $order_id = $notification['order_id'];

    $pembayaran = Pembayaran::where('order_id', $order_id)->first();

    if ($pembayaran) {
        if ($transaction_status == 'capture' || $transaction_status == 'settlement') {
            $pembayaran->status = 'Lunas';
        } else if ($transaction_status == 'pending') {
            $pembayaran->status = 'Pending';
        } else if ($transaction_status == 'deny' || $transaction_status == 'expire' || $transaction_status == 'cancel') {
            $pembayaran->status = 'Failed';
        }
        $pembayaran->save();
    }

    return response()->json(['message' => 'Notification handled successfully']);
}



}
