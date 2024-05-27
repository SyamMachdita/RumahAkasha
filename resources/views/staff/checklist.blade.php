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
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
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
                <div class="row">
                    <div class="column">
                        <button><a href="/staff/event">Back</a></button>
                    </div>
                    <div class="column">
                        <button type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script>
        function searchParticipants() {
            // Ambil nilai input pencarian
            var input = document.getElementById('searchInput').value.toUpperCase();

            // Ambil semua baris dalam tabel
            var rows = document.querySelectorAll('tbody tr');

            // Loop melalui semua baris
            for (var i = 0; i < rows.length; i++) {
                var nameColumn = rows[i].querySelector('.name');
                if (nameColumn) {
                    var name = nameColumn.textContent.toUpperCase();
                    // Periksa apakah nama peserta cocok dengan input pencarian
                    if (name.indexOf(input) > -1) {
                        // Jika cocok, tampilkan baris
                        rows[i].style.display = '';
                    } else {
                        // Jika tidak cocok, sembunyikan baris
                        rows[i].style.display = 'none';
                    }
                }
            }
        }

        // Panggil fungsi pencarian saat tombol "Search" diklik
        document.getElementById('searchButton').addEventListener('click', searchParticipants);
    </script>
</body>
</html>
