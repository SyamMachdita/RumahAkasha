@extends('master.layout-staff')

@section('konten')
    <link rel="stylesheet" href="{{asset('css/staff/styles.css')}}">
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
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Fee</th>
                                <th>Rundown</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Isi konten event -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="Reservasi">
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
                                <!-- Isi konten reservasi -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
