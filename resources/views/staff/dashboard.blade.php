@extends('master.layout-staff')

@section('konten')
    <link rel="stylesheet" href="{{asset('css/staff/styles.css')}}">
    <main>
        <div class="cards">
            <div class="ongoing">
                <div class="card-ongoing">
                    <div class="ongoing-header">
                        <h1>Ongoing Event</h1>
                    </div>
                    <div class="ongoing-akasha">
                        <table>
                            <thead>
                                <tr class="table-ongoing">
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Fee</th>
                                    <th>Customer List</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($upcomingEvents as $up_event)
                                    <tr>
                                        <td>{{ $up_event->title }}</td>
                                        <td>{{ $up_event->date }}</td>
                                        <td>{{ $up_event->time }}</td>
                                        <td>{{ $up_event->fee }}</td>
                                        <td><a href="{{ route('staff.event.participants', $up_event->id) }}" class="action-btn" title="Checklist">More Details</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-ongoing">
                    <div class="ongoing-header">
                        <h1>Upcoming Reservation</h1>
                    </div>
                    <div class="ongoing-akasha">
                        <table>
                            <thead class="table-ongoing">
                                <tr>
                                    <th>Name</th>
                                    <th>People</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Place</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($upcomingReservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->people }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>{{ $reservation->time }}</td>
                                        <td>{{ $reservation->place }}</td>
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
                        <h1>{{$sumReserveDone}}</h1>
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
                                <th>People</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Place</th>
                                {{-- <th>Notes</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($previousReservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->people }}</td>
                                    <td>{{ $reservation->date }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>{{ $reservation->place }}</td>
                                    {{-- <td>{{ $reservation->notes }}</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
