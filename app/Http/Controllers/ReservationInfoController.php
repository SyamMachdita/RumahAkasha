<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pesanan;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationInfoController extends Controller
{
    public function info_owner()
    {
        $reservasi = Reservasi::join('users', 'reservasis.id_customer', '=', 'users.id')
            ->leftJoin('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
            ->where(function ($query) {
                $query->where('pembayarans.status', 'PAID')
                      ->orWhere('reservasis.status', 'no order');
            })
            ->select(
                'users.full_name',
                'users.email',
                'users.no_telp',
                'reservasis.tanggal',
                'reservasis.jam',
                'reservasis.tempat',
                'reservasis.jumlah_orang',
                'reservasis.note',
                DB::raw('COALESCE(pembayarans.total_harga, 0) as total_harga'),
                DB::raw('COALESCE(pembayarans.status, "Belum Bayar") as status_pembayaran'),
                DB::raw('COALESCE(reservasis.status, "no order") as reservasi_status')
            )
            ->orderBy('reservasis.id_reservasi', 'desc')
            ->get();

        return view('owner.reservasi', compact('reservasi'));
    }



    public function info_staff()
{
    $today = Carbon::today();
    $oneWeekFromNow = $today->copy()->addWeek();
    $reservasi = Reservasi::whereBetween('tanggal', [$today, $oneWeekFromNow])
        ->join('users', 'reservasis.id_customer', '=', 'users.id')
        ->leftjoin('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
        ->where(function ($query) {
            $query->where('pembayarans.status', 'PAID')
                  ->orWhere('reservasis.status', 'no order');
        })
        ->select(
            'users.full_name as name',
            'users.email',
            'reservasis.tanggal',
            'reservasis.jam',
            'reservasis.tempat',
            'reservasis.jumlah_orang',
            'reservasis.note',
            'reservasis.id_reservasi'
        )
        ->orderBy('reservasis.tanggal', 'asc')
        ->get();

    $pesanan = Pesanan::join('menus', 'pesanans.id_menu', '=', 'menus.id_menu')
        ->select(
            'pesanans.id_reservasi',
            'menus.name as nama_menu',
            'pesanans.jumlah_menu'
        )
        ->get()
        ->groupBy('id_reservasi');

    return view('staff.reservasi', compact('reservasi', 'pesanan'));
}

}
