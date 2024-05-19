@extends('master.layout-owner')
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
@endsection
