@extends('master.layout-owner')
@section('konten')
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="/css/owner/styles.css">

        <main>

            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>15</h1>
                        <span>Event</span>
                    </div>
                    <div>
                        <span class="las la-calendar"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>20</h1>
                        <span>Menu</span>
                    </div>
                    <div>
                        <span class="las la-coffee"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>18</h1>
                        <span>Reservasi</span>
                    </div>
                    <div>
                        <span class="las la-book"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">

                <div class="Event">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Event</h3>
                        </div>

                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Date</td>
                                        <td>Time</td>
                                        <td>Image</td>
                                        <!-- <td>Status</td> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Night Party</td>
                                        <td>May 10, 2024</td>
                                        <td>12:00</td>
                                        <td><img src="img/2.jpeg" width="60px" height="60px" alt="Event Image 1"></td>
                                        <!-- <td>
                                            <span class="status"></span>
                                            review
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>Event Title 2</td>
                                        <td>May 15, 2024</td>
                                        <td>16:00</td>
                                        <td><img src="event-image2.jpg" alt="Event Image 2"></td>
                                        <!-- <td>
                                            <span class="status"></span>
                                            in progress
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>Event Title 3</td>
                                        <td>May 15, 2024</td>
                                        <td>18:00</td>
                                        <td><img src="event-image2.jpg" alt="Event Image 2"></td>
                                        <!-- <td>
                                            <span class="status"></span>
                                            pending
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="Coffee">
                    <div class="card">
                        <div class="card-header">
                            <h3>Coffee Menu</h3>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Americano</td>
                                        <td><img src="img/americano.jpeg" width="60px" height="60px" alt="Americano"></td>
                                        <td>Rp.20.000</td>
                                    </tr>
                                    <tr>
                                        <td>Cappuccino</td>
                                        <td><img src="img/cappuccino.jpg" width="60px" height="60px" alt="Cappuccino"></td>
                                        <td>Rp.20.000</td>
                                    </tr>
                                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="NonCoffee">
                    <div class="card">
                        <div class="card-header">
                            <h3>Non Coffee Menu</h3>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Green Tea</td>
                                        <td><img src="img/green-tea.jpg" width="60px" height="60px" alt="Green Tea"></td>
                                        <td>Rp.20.000</td>
                                    </tr>
                                    <tr>
                                        <td>Matcha Latte</td>
                                        <td><img src="img/matcha-latte.jpg" width="60px" height="60px" alt="Matcha Latte"></td>
                                        <td>Rp.20.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="Signature">
                    <div class="card">
                        <div class="card-header">
                            <h3>Signature Menu</h3>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Signature Mocha</td>
                                        <td><img src="img/signature-mocha.jpg" width="60px" height="60px" alt="Signature Mocha"></td>
                                        <td>Rp.20.000</td>
                                    </tr>
                                    <tr>
                                        <td>Signature Latte</td>
                                        <td><img src="img/signature-latte.jpg" width="60px" height="60px" alt="Signature Latte"></td>
                                        <td>Rp.20.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="recent-grid">
                    <div class="Barista">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Barista</h3>
                            </div>
                            <div class="card-body">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Tahun kerja</th>
                                            <th>Job Desc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="barista-image1.jpg" width="60px" height="60px" alt="Barista Image 1"></td>
                                            <td>John Doe</td>
                                            <td>aku jago</td>
                                            <td>2022</td>
                                            <td>Senior Barista</td>
                                        </tr>
                                        <tr>
                                            <td><img src="barista-image2.jpg" width="60px" height="60px" alt="Barista Image 2"></td>
                                            <td>Jane Doe</td>
                                            <td>aku jago</td>
                                            <td>2020</td>
                                            <td>Junior Barista</td>
                                        </tr>
                                        <!-- Tambahkan baris sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class ="Reservasi">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Reservasi</h3>
                        </div>
                        <div class="scroll-container">
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
                                        <th>DP/Full</th>
                                        <th>Total</th>
                                        <th>Total Price</th>
                                        <th>Email</th>
                                        <th>Yes/No</th>
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
                                        <td>Yes</td>
                                    </tr>

                                    <tr>
                                        <td>Luci Tyra</td>
                                        <td>2</td>
                                        <td>June 10, 2024</td>
                                        <td>16.30 WIB</td>
                                        <td>Indoor</td>
                                        <td>Untuk minumnya, less sugar dan less ice semua ya!</td>
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
                                        <td>No</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        </div>
                </div>
            </div>



            </div>
        </main>
    </div>
@endsection
