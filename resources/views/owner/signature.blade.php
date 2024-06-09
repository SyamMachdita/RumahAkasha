@extends('master.layout-owner')
<<<<<<< HEAD

@section('konten')
    <link rel="stylesheet" href="{{ asset('css/owner/event.css') }}">
    <div class="main-content-wrapper">
        <div class="main-content">
            <div class="recent-grid">
                <div class="event">
                    <div class="card">
                        <div class="card-header">
                            <h3>Menu Signature</h3>
                            <a class="add-btn" href="/owner/add-signature">+ Add</a>
                        </div>
                            <div class="scroll-container">
                                <div class="card-body">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($menu)
                                                @foreach ($menu as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td><img src="{{ asset(str_replace('../public', '', $item->image)) }}" width="60px" height="60px" alt="Menu Image"></td>
                                                    <td>Rp {{ $item->price }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    {{-- <td>{{ $menuSignature->kategori }}</td> --}}
                                                    <td>
                                                        <form action="{{ route('destroy.signature', $item->id_menu) }}" method="POST">
                                                            <a href="{{ route('edit.signature', $item->id_menu) }}"  class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="action-btn" title="Delete"><span class="las la-trash-alt" onclick="confirmDelete('{{ $item->id_menu}}', '{{$item->name}}')"></span></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <script>
                function confirmDelete(CoffeeID, CoffeName) {
                    if (confirm("Yakin hapus Signature: " + CoffeName + "?")) {
                        document.getElementById('delete-form-' + CoffeeID).submit();
                    }
                }
            </script>
=======
@section('konten')

    <link rel="stylesheet" href="{{asset('css/owner/signature.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <div class="recent-grid">

        <div class="Signature">
            <div class="card">
                <div class="card-header">
                    <h2>Signature Menu</h2>
                </div>
                <div class="card-body">
                    <div><a class="add-btn" href="/owner/add-signature">+ Add</a></div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Signature Mocha</td>
                                <td><img src="img/signature-mocha.jpg" width="60px" height="60px" alt="Signature Mocha"></td>
                                <td>Rp.20.000</td>
                                <td>
                                    <a href="/owner/edit-signature" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                    <button class="action-btn" title="Delete"><span class="las la-trash-alt"></span></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
@endsection


