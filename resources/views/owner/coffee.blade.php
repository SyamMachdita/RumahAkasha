@extends('master.layout-owner')
@section('konten')
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="{{asset('css/owner/coffee.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <div class="recent-grid">

        <div class="Coffee">
            <div class="card">
                <div class="card-header">
                    <h2>Coffee Menu</h2>
                </div>
                <div class="card-body">
                    <div><a class="add-btn" href="/owner/add-coffee">+ Add</a></div>
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
                                <td>Americano</td>
                                <td><img src="img/americano.jpeg" width="60px" height="60px" alt="Americano"></td>
                                <td>Rp.20.000</td>
                                <td>
                                    <a href="/owner/edit-coffee" class="action-btn" title="Edit"><span class="las la-edit"></span></a>
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
