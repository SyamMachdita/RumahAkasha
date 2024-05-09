@extends('master.layout');
@section('konten')
<link rel="stylesheet" href="{{asset('css/event.css')}}">
    <section id="background-event" class="up-event">
        <div class="event-up">
            <div class="title">
                <h1>TITLE</h1>
            </div>
            <div class="sub-topic">
                <h5>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum cum officiis vitae doloremque, aspernatur suscipit, veniam reprehenderit
                </h5>
            </div>
            <div class="date">
                <h2>Date & Time</h2>
            </div>
            <div class="status-bayar">
                <h5>FREE/ FEE</h5>
            </div>

            <button type="button" class="button-description" >
                <a href="/event-about">
                    <h5>Selengkapnya</h5>
                </a>
            </button>
        </div>

    </section>

    <section>
        <div class="prev-event">
            <h1>Our Previos Event</h1>
        </div>
        <div class="grid-container">
            <div class="card">
                <img src="/img/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1>Nama Event</h1>
                    <button type="button" class="button-description2" >
                        <a href="#">
                            <h5>Selengkapnya</h5>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="/img/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1>Nama Event</h1>
                    <button type="button" class="button-description2" >
                        <a href="#">
                            <h5>Selengkapnya</h5>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="/img/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1>Nama Event</h1>
                    <button type="button" class="button-description2" >
                        <a href="#">
                            <h5>Selengkapnya</h5>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    @endsection
