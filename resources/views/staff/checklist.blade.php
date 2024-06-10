<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Event Participants</title>
    <link rel="stylesheet" href="{{ asset('css/staff/checklist.css') }}">
</head>
<body>
    <section class="container">
        <header><b>List Event Participants</b></header>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search Name" onkeyup="searchParticipants()">
            <button type="button" id="searchButton" onclick="searchParticipants()">Search</button>
        </div>
        <form action="{{ route('staff.event.updateStatus') }}" method="POST" class="form">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Attendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrations as $registration)
                            <tr>
                                <td class="id">{{ $registration->id_registrasievent }}</td>
                                <td class="name">{{ $registration->customer ? $registration->customer->name : 'Unknown' }}</td>
                                <td class="status">
                                    <input type="checkbox" name="status[{{ $registration->id_registrasievent }}]" value="checked" {{ $registration->status == 'checked' ? 'checked' : '' }}>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="column">
                    <button type="button" onclick="window.location.href='/staff/event'">Back</button>
                </div>
                <div class="column">
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
    </section>

    <script>
        function searchParticipants() {
            var input = document.getElementById('searchInput').value.toUpperCase();
            var rows = document.querySelectorAll('tbody tr');
            for (var i = 0; i < rows.length; i++) {
                var nameColumn = rows[i].querySelector('.name');
                if (nameColumn) {
                    var name = nameColumn.textContent.toUpperCase();
                    if (name.indexOf(input) > -1) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
        }
    </script>
</body>
</html>
