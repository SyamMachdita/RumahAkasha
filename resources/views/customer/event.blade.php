@extends('master.layout')
@section('konten')
<link rel="stylesheet" href="{{asset('css/homepage/event.css')}}">

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
                <h1>No Upcoming Event</h1>
            @endif
        </div>
    </div>
</section>

<section>
    <div class="prev-event">
        <h1>Our Previous Events</h1>
    </div>
    <div class="grid-container">
        @foreach ($previousEvents as $event)
            <div class="card">
                <img src="/img/6.png" class="card-img-top" alt="{{ $event->title }}">
                <div class="card-body">
                    <h1>{{ $event->title }}</h1>
                    <button type="button" class="button-description2">
                        <a href="{{ route('event.about', $event->id) }}">
                            <h5>Selengkapnya</h5>
                        </a>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
