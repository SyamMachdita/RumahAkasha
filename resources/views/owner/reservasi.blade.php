@extends('master.layout-owner')

@section('konten')
    <link rel="stylesheet" href="{{ asset('css/owner/reservasi.css') }}">
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
                                    <th>Email</th>
                                    <th>No_Telp</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Total Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservasi as $item)
                                    <tr>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->no_telp }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->jam }}</td>
                                        <td>
                                            @if ($item->total_harga == 0)
                                                -
                                            @else
                                                {{ number_format($item->total_harga, 0, ',', '.') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status_pembayaran === null)
                                                Belum Bayar
                                            @elseif ($item->reservasi_status === 'no order')
                                                No Order
                                            @else
                                                {{ $item->status_pembayaran }}
                                            @endif
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
