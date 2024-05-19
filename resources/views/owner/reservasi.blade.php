@extends('master.layout-owner')
@section('konten')

    <link rel="stylesheet" href="{{asset('css/owner/reservasi.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <div class="recent-grid">

        <div class ="Reservasi">
            <div class="card">
                <div class="card-header">
                    <h3>Recent Reservasi</h3>
                    <!-- <button>See all <span class="las la-arrow-right"></span></button> -->
                </div>
                <div class="card-body">
                    <!-- <div><a class="add-btn" href="formNonCoffee.html">+ Add</a></div> -->
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>People</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Place</th>
                                <th>Notes</th>
                                <th>Menu</th>
                                <th>Pcs</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Total Price</th>
                                <th>DP/Full</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Yes/No</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>3</td>
                                <td>June 10, 2024</td>
                                <td>16.30 WIB</td>
                                <td>Outdoor</td>
                                <td>-</td>
                                <td>
                                    <ol>Nasi Goreng</ol>
                                    <ol>Ayam Bakar</ol>
                                    <ol>Kangkung Balacan</ol>
                                    <ol>Ice Tea</ol>
                                </td>
                                <td>
                                    <ol>1</ol>
                                    <ol>1</ol>
                                    <ol>1</ol>
                                    <ol>3</ol>
                                </td>
                                <td>
                                    <ol>Rp 30.000</ol>
                                    <ol>Rp 35.000</ol>
                                    <ol>Rp 30.000</ol>
                                    <ol>Rp 5.000</ol>
                                </td>
                                <td>
                                    <ol>Rp 30.000</ol>
                                    <ol>Rp 35.000</ol>
                                    <ol>Rp 30.000</ol>
                                    <ol>Rp 15.000</ol>
                                </td>
                                <td>Rp 110.000</td>
                                <td>Rp 55.000</td>
                                <td>john.doe@gmail.com</td>
                                <td>
                                    <span class="status green"></span>
                                    Aprroved
                                </td>
                                <td>Yes</td>
                                <!-- <td>

                                    <span class="las la-edit" title="Edit"></span>

                                    <span class="las la-trash-alt" title="Delete"></span>
                                </td> -->
                            </tr>

                            <tr>
                                <td>Luci Tyra</td>
                                <td>2</td>
                                <td>June 10, 2024</td>
                                <td>16.30 WIB</td>
                                <td>Indoor</td>
                                <td >Untuk minumnya, less sugar dan less ice semua ya!</td>
                                <td>
                                    <ol>Nasi Goreng</ol>
                                    <ol>Ayam Bakar</ol>
                                    <ol>Lemon Tea</ol>
                                    <ol>Ice Tea</ol>
                                </td>
                                <td>
                                    <ol>1</ol>
                                    <ol>1</ol>
                                    <ol>1</ol>
                                    <ol>1</ol>
                                </td>
                                <td>
                                    <ol>Rp 30.000</ol>
                                    <ol>Rp 35.000</ol>
                                    <ol>Rp 20.000</ol>
                                    <ol>Rp 20.000</ol>
                                </td>
                                <td>
                                    <ol>Rp 30.000</ol>
                                    <ol>Rp 35.000</ol>
                                    <ol>Rp 20.000</ol>
                                    <ol>Rp 20.000</ol>
                                </td>
                                <td>Rp 105.000</td>
                                <td>Rp 105.000</td>
                                <td>luci.tyra@gmail.com</td>
                                <td>
                                    <span class="status pink"></span>
                                    In Progress
                                </td>
                                <td>No</td>
                                <!-- <td>
                                    <span class="las la-edit" title="Edit"></span>
                                    <span class="las la-trash-alt" title="Delete"></span>
                                </td> -->
                            </tr>


                            <!-- Tambahkan baris sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
                </div>
        </div>

    </div>
@endsection
