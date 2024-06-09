<?php
namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservationInfoController extends Controller
{
    public function info_owner()
    {
        $reservasi = Reservasi::join('users', 'reservasis.id_customer', '=', 'users.id')
            ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
            ->select(
                'users.full_name',
                'users.email',
                'users.no_telp',
                'reservasis.tanggal',
                'reservasis.jam',
                'reservasis.tempat',
                'reservasis.jumlah_orang',
                'reservasis.note',
                'pembayarans.total_harga',
                'pembayarans.status',
            )
            ->orderBy('reservasis.id_reservasi', 'desc')
            ->get();

        return view('owner.reservasi', compact('reservasi'));
    }

    public function info_staff()
    {
        $reservasi = Reservasi::join('users', 'reservasis.id_customer', '=', 'users.id')
            ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
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
            ->where('pembayarans.status', 'PAID')
            ->orderBy('reservasis.id_reservasi', 'desc')
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
