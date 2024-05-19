@extends ('master.layout-owner')
@section('konten')
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
                </div>
            </div>
        </div>
    </div>
@endsection
