@extends('master.layout')
@section('konten')
    <link rel="stylesheet" href="{{ asset('css/homepage/event-about.css') }}">
    <div class="join-us">
        <h1>Join Us</h1>
    </div>

    <div class="event_image up-event">
        <img src="{{ asset(str_replace('../public', '', $event->image)) }}" alt="image_event">
    </div>

    <section>
        <div class="description">
            <div class="title-event">
                <h1>{{ $event->title }}</h1>
                <h1>{{ $event->date }}</h1>
                <h1>{{ $event->time }}</h1>
            </div>

            <div class="sub-topic">
                <h1>{{ $event->description }}</h1>
            </div>
        </div>

        @if($event->status == 'in_progress')
            <div>
                @if($isRegistered)
                    <button class="button-submit" disabled>Registered</button>
                @else
                    <form action="{{ route('register.event', $event->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_event" value="{{ $event->id }}">
                        <input type="hidden" name="id_customer" value="{{ auth()->user()->id }}">
                        <button type="submit" class="button-submit">Register Here!</button>
                    </form>
                @endif

                <div class="fee">
                    <h5>FEE : Rp. $$$</h5>
                </div>
            </div>
        @else
            <div class="fee">
                <h5>This event is no longer available for registration.</h5>
            </div>
        @endif
    </section>

    <!-- Success Modal -->
    @if(session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Registration Successful</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ session('success') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>
    @endif
@endsection
