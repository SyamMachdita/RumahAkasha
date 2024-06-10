<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Event;
use App\Models\Pesanan;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ownerDashboardController extends Controller
{
    public function owner_dashboard()
{
    $today = Carbon::today();
    $latestReservasi = Reservasi::latest('id_reservasi')
        ->join('users', 'reservasis.id_customer', '=', 'users.id')
        ->leftJoin('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
        ->select(
            'reservasis.*',
            'users.full_name as customer_name',
            'users.no_telp as customer_no_telp',
            DB::raw('COALESCE(pembayarans.status, "Belum Bayar") as status_pembayaran'),
            DB::raw('COALESCE(reservasis.status, "no order") as reservasi_status')
        )
        ->first();

    $sumEventDone = Event::where('date', '<=', $today)->count();
    $sumReserveDone = Reservasi::where('tanggal', '<', $today)
        ->join('users', 'reservasis.id_customer', '=', 'users.id')
        ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
        ->where('pembayarans.status', 'PAID')
        ->count();

    $previousReservations = Reservasi::whereDate('tanggal', '<', $today)
        ->join('users', 'reservasis.id_customer', '=', 'users.id')
        ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
        ->select(
            'users.full_name as name',
            'reservasis.jumlah_orang as people',
            'reservasis.tanggal as date',
            'reservasis.jam as time',
            'reservasis.tempat as place',
            'reservasis.note as notes',
            'pembayarans.total_harga as total_bayar',
            DB::raw('COALESCE(pembayarans.status, "Belum Bayar") as status_pembayaran'),
            DB::raw('COALESCE(reservasis.status, "no order") as reservasi_status')
        )
        ->orderBy('reservasis.tanggal', 'desc')
        ->get();

    $previousEvents = Event::where('date', '<=', $today)
        ->orderBy('date', 'desc')
        ->get();

    $totalRevenue = DB::table('pembayarans')
        ->where('status', 'PAID')
        ->sum('total_harga');

    $totalReservation = DB::table('pembayarans')
        ->where('status', 'PAID')
        ->count();

    return view('owner.homepage', compact(
        'latestReservasi', 'sumEventDone', 'sumReserveDone', 'previousEvents', 'previousReservations', 'totalRevenue', 'totalReservation'
    ));
}



    public function owner_information()
    {
        $today = Carbon::today();


        $bestSeller = Pesanan::select('id_menu', DB::raw('SUM(jumlah_menu) as total'))
        ->groupBy('id_menu')
        ->orderByDesc('total')
        ->take(3) // Ambil 3 menu teratas
        ->get();

        // Mengambil detail masing-masing menu
        $bestSellerMenus = [];
        foreach ($bestSeller as $item) {
            $menu = Menu::find($item->id_menu);
            if ($menu) {
                $menu->total_pesanan = $item->total;
                $bestSellerMenus[] = $menu;
            }
        }


        $reservationDetails = DB::table('reservasis')
        ->join('users', 'reservasis.id_customer', '=', 'users.id')
        ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
        ->where('pembayarans.status', 'PAID')
        ->select(
            'users.full_name as name',
            'reservasis.tanggal as date',
            'reservasis.jam as time',
            'pembayarans.total_harga as total_bayar',
            'pembayarans.status as status'
        )
        ->get();
        $totalRevenue = DB::table('pembayarans')
        ->where('status', 'PAID')
        ->sum('total_harga');

        $totalReservation = DB::table('pembayarans')
            ->where('status', 'PAID')
            ->count();


        return view('owner.revenue', compact(
            'totalRevenue', 'totalReservation', 'reservationDetails', 'bestSellerMenus'
        ));


    }
}
