@extends('master.layout-staff')

@section('konten')
    <link rel="stylesheet" href="{{ asset('css/staff/reservasi.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <div class="recent-grid">
        <div class="Reservasi">
            <div class="card">
                <div class="card-header">
                    <h3>Reservation List</h3>
                </div>
                <div class="scroll-container">
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>People</th>
                                    <th>Place</th>
                                    <th>Notes</th>
                                    <th>Menu</th>
                                    <th>Pcs</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservasi as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->jam }}</td>
                                        <td>{{ $item->jumlah_orang }}</td>
                                        <td>{{ $item->tempat }}</td>
                                        <td>{{ $item->note }}</td>
                                        <td>
                                            <ol>
                                                @if(isset($pesanan[$item->id_reservasi]))
                                                    @foreach($pesanan[$item->id_reservasi] as $pesan)
                                                        <li>{{ $pesan->nama_menu }}</li>
                                                    @endforeach
                                                @else
                                                    <li>No menu</li>
                                                @endif
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                @if(isset($pesanan[$item->id_reservasi]))
                                                    @foreach($pesanan[$item->id_reservasi] as $pesan)
                                                        <li>{{ $pesan->jumlah_menu }}</li>
                                                    @endforeach
                                                @else
                                                    <li>-</li>
                                                @endif
                                            </ol>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
