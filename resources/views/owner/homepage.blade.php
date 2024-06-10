@extends('master.layout-owner')

@section('konten')
    <link rel="stylesheet" href="{{ asset('css/owner/styles.css') }}">
    <main>
        <div class="cards">
            <div class="ongoing">
                <div class="card-ongoing-reservation">
                    <div class="ongoing-header-reservation">
                        <span class="icon las la-chart-line"></span>
                        <h1>Monthly Revenue</h1>
                    </div>
                    <div class="ongoing-akasha-reservation">
                        <h2 class="revenue">Rp. {{ number_format($totalRevenue, 0, ',', '.') }}</h2>
                        <h2 class="reservations">Total Reservation : {{ $totalReservation }}</h2>
                        <div class="reservation-button-container">
                            <button type="button" onclick="window.location.href='/owner/information'" class="reservation-button">View Details</button>
                        </div>
                    </div>
                </div>
                <div class="card-ongoing">
                    <div class="ongoing-header">
                        <h1>Latest Reservation</h1>
                    </div>
                    <div class="ongoing-akasha">
                        <table>
                            <thead class="table-ongoing">
                                <tr>
                                    <th>Name</th>
                                    <th>No_Telp</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($latestReservasi)
                                    <tr>
                                        <td>{{ $latestReservasi->customer_name }}</td>
                                        <td>{{ $latestReservasi->customer_no_telp }}</td>
                                        <td>{{ $latestReservasi->tanggal }}</td>
                                        <td>{{ $latestReservasi->jam }}</td>
                                        <td>
                                            @if ($latestReservasi->status_pembayaran === null)
                                                Belum Bayar
                                            @elseif ($latestReservasi->reservasi_status === 'no order')
                                                No Order
                                            @else
                                                {{ $latestReservasi->status_pembayaran }}
                                            @endif
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="5">No new reservations</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="reservation-button-container">
                            <button type="button" onclick="window.location.href='{{ url('owner/reservasi') }}'" class="reservation-button">View Reservations</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <div class="card-single tanggal">
                    <div>
                        <h2>{{ \Carbon\Carbon::now()->format('d F Y') }}</h2>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{ $sumEventDone }}</h1>
                        <span>Event Done</span>
                    </div>
                    <div>
                        <span class="las la-calendar"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{ $sumReserveDone }}</h1>
                        <span>Reservation Done</span>
                    </div>
                    <div>
                        <span class="las la-book"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent-grid">
            <div class="card">
                <div class="card-header">
                    <h3>Event History</h3>
                </div>
                <div class="scroll-container">
                    <table class="ongoing-akasha">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Fee</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($previousEvents as $prev_event)
                                <tr>
                                    <td>{{ $prev_event->title }}</td>
                                    <td>{{ $prev_event->date }}</td>
                                    <td>{{ $prev_event->time }}</td>
                                    <td>{{ $prev_event->fee }}</td>
                                    <td>{{ $prev_event->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Reservation History</h3>
                </div>
                <div class="scroll-container">
                    <table class="ongoing-akasha">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Total bayar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($previousReservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->date }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>
                                        @if ($reservation->total_bayar === 0)
                                            -
                                        @else
                                            {{ $reservation->total_bayar }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($latestReservasi->status_pembayaran === null)
                                                Belum Bayar
                                        @elseif ($latestReservasi->reservasi_status === 'no order')
                                                No Order
                                        @else
                                            {{ $latestReservasi->status_pembayaran }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
