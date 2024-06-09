<<<<<<< HEAD
@extends('master.layout')
@section('css')
<link rel="stylesheet" href="{{asset('css/homepage/navbar.css')}}">
@endsection
=======
@extends('master.layout');
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
@section('konten')
<head>
<link rel="stylesheet" href="{{asset('css/homepage/event.css')}}">
<<<<<<< HEAD
</head>
<section id="background-event" class="up-event">
    <div class="event-up">
        <div class="title">
            @if ($upcomingEvent)
                <h1>Our Upcoming Event</h1>
                <h2>{{ $upcomingEvent->title }}</h2>
                <div class="date">
                    <h2>{{ $upcomingEvent->date }} at {{ $upcomingEvent->time }}</h2>
                </div>
                <button type="button" class="button-description">
                    <a href="{{ route('event.about', $upcomingEvent->id) }}">
                        <h5>Selengkapnya</h5>
                    </a>
                </button>
            @else
                <div class="no-event">
                    <h1>No Upcoming Event</h1>
                    <h2>See you on the next upcoming event 👋</h2>
                </div>
            @endif
=======
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
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
        </div>

    </section>

    <section>
        <div class="prev-event">
            <h1>Our Previos Event</h1>
        </div>
        <div class="grid-container">
            <div class="card">
<<<<<<< HEAD
                <img src="{{ asset(str_replace('../public', '', $event->image)) }}" class="card-img-top" alt="{{ $event->title }}">
                <div class="card-body">
                    <h1>{{ $event->title }}</h1>
                    <h5>{{ $event->date}}</h5>
                    <button type="button" class="button-description2">
                        <a href="{{ route('event.about', $event->id) }}">
=======
                <img src="/img/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1>Nama Event</h1>
                    <button type="button" class="button-description2" >
                        <a href="#">
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
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
