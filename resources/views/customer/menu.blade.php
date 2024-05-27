@extends('master.layout')

@section('konten')
    <link rel="stylesheet" href="css/homepage/menu.css">
    {{-- <link rel="stylesheet" href="css/homepage/list2.css"> --}}
    {{-- <link rel="stylesheet" href="css/homepage/responsive.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="container">
        <div class="slider-wrapper">
            <div class="slider">
                <div id="slide-1" class="slide-item">
                    <h1 class="display">Highlight of <span class="bottom-text">the day</span></h1>
                    <p class="slide-text"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illum quam corrupti dolorum ullam nam laborum, dolor reiciendis pariatur? Consectetur, nihil? Beatae maiores id nostrum cumque ex pariatur, delectus iusto!</p>
                </div>
                <div id="slide-2" class="slide-item">
                    <h1 class="display">Highlight of <span class="bottom-text">the day</span></h1>
                    <p class="slide-text"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illum quam corrupti dolorum ullam nam laborum, dolor reiciendis pariatur? Consectetur, nihil? Beatae maiores id nostrum cumque ex pariatur, delectus iusto!</p>
                </div>
                <div id="slide-3" class="slide-item">
                    <h1 class="display">Highlight of <span class="bottom-text">the day</span></h1>
                    <p class="slide-text"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illum quam corrupti dolorum ullam nam laborum, dolor reiciendis pariatur? Consectetur, nihil? Beatae maiores id nostrum cumque ex pariatur, delectus iusto!</p>
                </div>
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="section-title">
            <h2>Our Menu</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis in reprehenderit repudiandae ipsum culpa cupiditate tempora maiores autem nisi maxime, aliquam rem facilis, deleniti fugit cum vitae molestiae, hic consequuntur!</p>
        </div>
        <div class="menu-wrapper">
            <div class="menus">
                <div class="menu-column">
                    <h4>Coffee</h4>
                    @foreach ($menu_coffee as $men_cof)
                    <div class="single-menu">
                        <div class="menu-content">
                            <img src="{{asset(str_replace('../public/', '', $men_cof->image)) }}" alt="tes">
                            <h5>{{$men_cof->name}} <span>Rp.{{$men_cof->price}}</span></h5>
                            <p>{{$men_cof->description}}</p>
                        </div>
                    </div>
                    <br>
                    @endforeach
                    <!-- More items -->
                </div>
                <div class="menu-column">
                    <h4>Non Coffee</h4>
                    @foreach ($menu_noncoffee as $men_noncoff)
                        <div class="single-menu">
                            <div class="menu-content">
                                <img src="{{asset(str_replace('../public/', '', $men_noncoff->image)) }}" alt="">
                                <h5>{{$men_noncoff->name}} <span>Rp.{{$men_noncoff->price}}</span></h5>
                                <p>{{$men_noncoff->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="menu-column">
                    <h4>Signature</h4>
                    @foreach ($menu_signature as $men_sig)
                        <div class="single-menu">
                            <div class="menu-content">
                                <img src="{{asset(str_replace('../public/', '', $men_sig->image)) }}" alt="">
                                <h5>{{$men_sig->name}}<span>Rp.{{$men_sig->price}}</span></h5>
                                <p>{{$men_sig->description}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
