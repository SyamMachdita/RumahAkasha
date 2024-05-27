@extends('master.layout-owner')
@section('konten')

<link rel="stylesheet" href="/css/owner/event.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<div class="recent-grid">
    <div class="Event">
        <div class="card">
            <div class="card-header">
                <h3>Recent Event</h3>
            </div>
            <div><a class="add-btn" href="/owner/create-event">+ Add</a></div>
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{$event->title}}</td>
                            <td>{{$event->date}}</td>
                            <td>{{$event->time}}</td>
                            <td><img src="{{asset(str_replace('../public/', '', $event->image)) }}" width="60px" height="60px" alt="Event Image"></td>
                            <td>{{$event->description}}</td>
                            <td>Rp {{$event->fee}}</td>
                            <td>
                                <span class="status
                                    @if ($event->status == 'Approved') green
                                    @elseif ($event->status == 'Pending') orange
                                    @elseif ($event->status == 'In progress') pink
                                    @else ''
                                    @endif">
                                </span>
                                {{$event->status}}
                            </td>
                            <td>
                                <form action="{{ route('destroy.event', $event->id) }}" method="POST">
                                    <a href="/api/edit-event/{{$event->id}}" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn" title="Delete"><span class="las la-trash-alt" onclick="confirmDelete('{{$event->id}}', '{{$event->title}}')"></span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    function confirmDelete(eventID, eventName) {
        if(confirm("Yakin hapus event: " + eventName + "?")){
            document.getElementById('delete-form-'+ eventID).submit();
        }
    }
</script>
@endsection
