@extends('master.layout-owner')

@section('konten')
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/owner/event.css') }}">
    <div class="main-content-wrapper">
        <div class="main-content">
            <div class="recent-grid">
                <div class="event">
                    <div class="card">
                        <div class="card-header">
                            <h3>Menu Non Coffee</h3>
                            <a class="add-btn" href="/owner/add-noncoffee">+ Add</a>
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
                                            @if ($menu)
                                                @foreach ($menu as $item)
                                                <tr>
                                                    <td>{{$item->name}}</td>
                                                    <td><img src="{{asset(str_replace('../public', '', $item->image)) }}" width="60px" height="60px" alt="Menu Image"></td>

                                                    <td>Rp{{$item->price}}</td>
                                                    <td>{{$item->description}}</td>
                                                    {{-- <td>{{$item->category}}</td> --}}
                                                    <td>
                                                        <form action="{{ route('destroy.noncoffee', $item->id_menu)}}" method="POST">
                                                            <a href="{{ route('edit.noncoffee', $item->id_menu) }}"  class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="action-btn" title="Delete" onclick="confirmDelete('{{ $item->id_menu }}', '{{ $item->name }}')"><span class="las la-trash-alt"></span></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="6">No data available</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
=======

    <link rel="stylesheet" href="{{asset('css/owner/noncoffee.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <div class="recent-grid">

        <div class="NonCoffee">
            <div class="card">
                <div class="card-header">
                    <h2>Non Coffee Menu</h2>
                </div>
                <div class="card-body">
                    <div><a class="add-btn" href="/owner/add-noncoffee">+ Add</a></div>
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
                                <td>Green Tea</td>
                                <td><img src="img/green-tea.jpg" width="60px" height="60px" alt="Green Tea"></td>
                                <td>Rp.20.000</td>
                                <td>
                                    <a href="/owner/edit-noncoffee" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
                                    <button class="action-btn" title="Delete"><span class="las la-trash-alt"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
                </div>
            </div>

            <script>
                function confirmDelete(CoffeeID, CoffeName) {
                    if (confirm("Yakin hapus noncoffee: " + CoffeName + "?")) {
                        document.getElementById('delete-form-' + CoffeeID).submit();
                    }
                }
            </script>
@endsection


