<title>Profile</title>
<link rel="stylesheet" href="/css/homepage/profile.css">
@extends('master.layout')
@section('konten')
    <section>
        <h1 class="header">Cerita Kita</h1>
        <div class="cerita">
            <div class="cerita-img">
                <img src="/img/akasha/img3.jpg" alt="">
            </div>
            <div class="cerita-content">
                <h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta suscipit enim quisquam accusamus inventore, alias architecto illo doloremque omnis similique dolorum reiciendis consectetur dolorem facere beatae. Reiciendis dolorem ut numquam!
                    Provident harum, consectetur debitis eum sapiente fugit praesentium? Dignissimos, hic? Molestiae consequatur doloribus ab sequi rem, sunt sit consectetur earum veritatis commodi doloremque labore iusto repellendus ex fugiat saepe nostrum?
                </h4>
            </div>
        </div>
    </section>

    <section>
        <h1 class="header">Cerita Kita</h1>
        <div class="cerita">
            <div class="cerita-content">
                <h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta suscipit enim quisquam accusamus inventore, alias architecto illo doloremque omnis similique dolorum reiciendis consectetur dolorem facere beatae. Reiciendis dolorem ut numquam!
                    Provident harum, consectetur debitis eum sapiente fugit praesentium? Dignissimos, hic? Molestiae consequatur doloribus ab sequi rem, sunt sit consectetur earum veritatis commodi doloremque labore iusto repellendus ex fugiat saepe nostrum?
                </h4>
            </div>

            <div class="cerita-img">
                <img src="/img/akasha/img1.jpg" alt="">
            </div>
        </div>
    </section>

    <section>
        <h1 class="header our-barista">Our Family</h1>
        <div class="grid-container">
            @foreach ($barista as $baristas)
                <div class="card">
                    <img src="{{ asset(str_replace('../public', '', $baristas->foto_barista)) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-text">
                            <div class="barista">
                                <h1>{{$baristas->nama_barista}}</h1>
                            </div>
                            <div class="jobdesk">
                                <h1>{{$baristas->job_desk}}</h1>
                            </div>
                            <div class="deskripsi">
                                <h1>{{$baristas->deskripsi}}</h1>
                            </div>
                            <div class="tahun_kerja">
                                <h1>{{$baristas->tahun_kerja}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
