@extends ('master.layout-owner')
@section('konten')
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/owner/event.css') }}">
    <div class="main-content-wrapper">
        <div class="main-content">
            <div class="recent-grid">
                <div class="event">
                    <div class="card">
                        <div class="card-header">
                            <h3>Barista</h3>
                            <a class="add-btn" href="/owner/add-barista">+ Add</a>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Years of Experience</th>
                                        <th>Job Desk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($baristas as $barista)
                                        <tr>
                                            <td>
                                                <img src="{{ asset(str_replace('../public', '', $barista->foto_barista)) }}" width="60px" height="60px" alt="Barista Image">
                                            </td>
                                            <td>{{ $barista->nama_barista }}</td>
                                            <td>{{ $barista->deskripsi }}</td>
                                            <td>{{ $barista->tahun_kerja }}</td>
                                            <td>{{ $barista->job_desk }}</td>
                                            <td>
                                                <form action="{{ route('destroy.barista', $barista->id_barista) }}" method="POST" style="display:inline;">
                                                    <a href="{{ route('edit.barista', $barista->id_barista) }}" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-btn" title="Delete" onclick="confirmDelete('{{ $barista->id_barista }}', '{{ $barista->nama_barista }}')"><span class="las la-trash-alt"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
=======
    <link rel="stylesheet" href="{{asset('css/owner/barista.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <div class="recent-grid">
        <div class="Barista">
            <div class="card">
                <div class="card-header">
                    <h3>Recent Barista</h3>
                </div>
                <div class="card-body">
                    <div><a class="add-btn" href="/owner/add-barista">+ Add</a></div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Tahun kerja</th>
                                <th>Job Desk</th>
                                <th>Action</th> <!-- Tambah kolom Action -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="barista-image1.jpg" width="60px" height="60px" alt="Barista Image 1"></td>
                                <td>John Doe</td>
                                <td>aku jago</td>
                                <td>2022</td>
                                <td>Senior Barista</td>
                                <td>
                                    <a href="/owner/edit-barista" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                    <button class="action-btn" title="Delete"><span class="las la-trash-alt"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(baristaID, baristaName) {
            if (confirm("Yakin hapus barista: " + baristaName + "?")) {
                document.getElementById('delete-form-' + baristaID).submit();
            }
        }
    </script>
@endsection
