@extends('master.layout-staff')

@section('konten')
    <link rel="stylesheet" href="{{asset('css/staff/reservasi.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        .notes {
            white-space: pre-wrap;
        }
    </style>
    <div class="recent-grid">
        <div class ="Reservasi">
            <div class="card">
                <div class="card-header">
                    <h3>Recent Reservasi</h3>
                </div>
                <div class="scroll-container">
                    <div class="card-body">
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>3</td>
                                    <td>June 10, 2024</td>
                                    <td>16:30</td>
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
                                        <span class="status pink"></span>
                                        In progress
                                    </td>
                                </tr>

                                <!-- Tambahkan baris sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- <h2>Add New Barista</h2>
    <form action="/submit-barista" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="gender">Gender:</label><br>
        <input type="text" id="gender" name="gender"><br>
        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br><br>
        <input type="submit" value="Submit">
    </form> -->

        <!-- Tambahkan bagian barista lainnya jika diperlukan -->
    </div>
@endsection
