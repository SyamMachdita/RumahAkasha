<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class staffDashboard extends Controller
{
    public function staff_dashboard()
    {
        $today = Carbon::today();
        $oneWeekFromNow = $today->copy()->addWeek();

        $upcomingReservations = Reservasi::whereBetween('tanggal', [$today, $oneWeekFromNow])
            ->join('users', 'reservasis.id_customer', '=', 'users.id')
            ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
            ->where('pembayarans.status', 'PAID')
            ->select(
                'users.full_name as name',
                'reservasis.jumlah_orang as people',
                'reservasis.tanggal as date',
                'reservasis.jam as time',
                'reservasis.tempat as place'
            )
            ->orderBy('reservasis.tanggal', 'asc')
            ->get();

            $previousReservations = Reservasi::whereDate('tanggal', '<', $today)
            ->join('users', 'reservasis.id_customer', '=', 'users.id')
            ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
            ->where('pembayarans.status', 'PAID')
            ->select(
                'users.full_name as name',
                'reservasis.jumlah_orang as people',
                'reservasis.tanggal as date',
                'reservasis.jam as time',
                'reservasis.tempat as place',
                'reservasis.note as notes',
                'pembayarans.total_harga as total_bayar',
                'pembayarans.status as status'
            )
            ->orderBy('reservasis.tanggal', 'desc')
            ->get();

        $upcomingEvents = Event::where('status', '=', 'in_progress')
            ->orderBy('date', 'asc')
            ->get();

        $previousEvents = Event::where('status', '=', 'done')
            ->orderBy('date', 'desc')
            ->get();

        $sumEventDone = Event::where('date', '<=', $today)->count();
        $sumReserveDone = Reservasi::where('tanggal', '<', $today)
        ->join('users', 'reservasis.id_customer', '=', 'users.id')
        ->join('pembayarans', 'reservasis.id_reservasi', '=', 'pembayarans.id_reservasi')
        ->where('pembayarans.status', 'PAID')
        ->count();

        return view('staff.dashboard', compact('upcomingReservations', 'upcomingEvents', 'previousEvents', 'sumEventDone', 'previousReservations', 'sumReserveDone'));
    }
}
