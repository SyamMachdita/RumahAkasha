@extends('master.layout-owner')

@section('konten')
    <link rel="stylesheet" href="{{asset('css/owner/information.css')}}">
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
                        <h2 class="reservations">Total Reservation : {{$totalReservation}}</h2>
                    </div>
                </div>

                <div class="card-ongoing">
                    <div class="ongoing-header">
                        <h1>Reservation Details</h1>
                    </div>
                    <div class="ongoing-akasha">
                        <table>
                            <thead class="table-ongoing">
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Total pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservationDetails as $reservation)
                                    <tr>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>{{ $reservation->time }}</td>
                                        <td>Rp. {{ number_format($reservation->total_bayar, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="information">
                <div class="card-single tanggal">
                    <div>
                        <h2>Monthly Best Seller</h2>
                    </div>
                </div>
                <div class="card-single ongoing-akasha">
                    <div>
                        <h1>Menu</h1>
                    </div>
                    <div>
                        <table>
                            <thead class="table-ongoing">
                                <tr>
                                <th>Name</th>
                                <th>Total Order</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($bestSellerMenus as $menu)
                                <tr>
                                        <td>{{ $menu->name }}</td>
                                        <td>{{ $menu->total_pesanan }}</td>
                                        {{-- <span> total order </span></li> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            {{-- <div class="menu-best">
                                <ul>

                                </ul>
                            </div> --}}
                        </table>
                    </div>
            </div>
        </div>

    </main>
@endsection
