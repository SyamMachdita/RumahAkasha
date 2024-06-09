<<<<<<< HEAD
@extends('master.layout')
@section('css')
<link rel="stylesheet" href="{{asset('css/homepage/navbar.css')}}">
@endsection
@section('konten')
<head>
<link rel="stylesheet" href="{{asset('css/homepage/home.css')}}">
</head>

<section class="home">
    <div class="home">
        <div class="header">
            <h1>RUMAH AKASHA</h1>
            <h4><q>Bring Back The 80's</q></h4>
        </div>
        <div class="content">
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt cumque similique quasi commodi voluptas beatae. Totam ad officia placeat qui quidem reiciendis corrupti Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus tempora impedit consequatur? Impedit culpa ipsa tenetur eaque reprehenderit vel, ratione suscipit et saepe illo porro quasi, repudiandae, dolore vitae.</h3>
            <div class="container">
                <div class="wrapper">
                    <img src="/img/akasha/img1.jpg">
                    <img src="/img/akasha/img3.jpg">
                    <img src="/img/akasha/img1.jpg">
                    <img src="/img/akasha/img8.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile">
    <div class="home-profile">
        <div class="profile-header">
            <h1>PROFILES</h1>
        </div>

        <div class="profile-content">
            <div class="profile-img">
                <img src="/img/akasha/img3.jpg" alt="">
            </div>

            <div class="description">
                <div class="card">
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam velit beatae quo facere accusamus facilis corporis, cupiditate deleniti laboriosam sed ullam sint fugiat aspernatur sit necessitatibus assumenda rem, qui est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur consequuntur itaque unde at optio eius delectus!optio eius delectus!
                    </h1>
                </div>
                <button type="button" class="button-description">
                    <a href="/profile">
                        <h5>Selengkapnya</h5>
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>

=======

@extends('master.layout');
@section('konten')

<link rel="stylesheet" href="{{asset('css/homepage/home.css')}}">

    <section>
        <div class="home">
            <div class="header">
                <h1>Rumah Akasha</h1>
                <h4>Bring Back The 80's</h4>
            </div>
            <div class="content">
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt cumque similique quasi commodi voluptas beatae. Totam ad officia placeat qui quidem reiciendis corrupti Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus tempora impedit consequatur? Impedit culpa ipsa tenetur eaque reprehenderit vel, ratione suscipit et saepe illo porro quasi, repudiandae, dolore vitae.</h3>
                <div class="container">
                    <div class="wrapper">
                        <img src="/img/3.png">
                        <img src="/img/6.png">
                        <img src="/img/pokeball.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="home-profile">
            <div class="profile-header">
                <h1>Profiles</h1>
            </div>

            <div class="profile-content">
                <div class="profile-img">
                    <img src="/img/3.png" alt="">
                </div>

                <div class="description">
                    <div class="card">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam velit beatae quo facere accusamus facilis corporis, cupiditate deleniti laboriosam sed ullam sint fugiat aspernatur sit necessitatibus assumenda rem, qui est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur consequuntur itaque unde at optio eius delectus!optio eius delectus!
                         </h1>
                    </div>
                        <button type="button" class="button-description" >
                            <a href="/profile">
                                <h5>Selengkapnya</h5>
                            </a>
                        </button>
                </div>
            </div>
        </div>
    </section>
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
@endsection
