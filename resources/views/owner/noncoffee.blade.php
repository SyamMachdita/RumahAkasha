@extends('master.layout-owner')
@section('konten')
    <title>Non Coffee Menu</title>
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

    </div>
@endsection
