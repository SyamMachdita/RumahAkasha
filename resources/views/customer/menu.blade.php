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


    <div class="main">
        <div class="section-title">
            <h2>Our Menu</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quis eaque consectetur odio. Assumenda exercitationem labore, molestias, iusto qui, debitis quidem voluptatem ipsa soluta ipsum corrupti tenetur minima praesentium nihil.</p>

        </div>
        <div class="menus">
            <div class="menu-column">
                <h4>coffee</h4>
                <div class="single-menu">
                    <img src="jerapah.jpg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-menu">
                    <img src="kopi1.jpeg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-menu">
                    <img src="kopi2.jpeg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="menu-column">
                <h4>Non Coffee</h4>
                <div class="single-menu">
                    <img src="jerapah.jpg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-menu">
                    <img src="kopi1.jpeg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-menu">
                    <img src="kopi2.jpeg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="menu-column">
                <h4>Signature</h4>
                <div class="single-menu">
                    <img src="jerapah.jpg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-menu">
                    <img src="kopi1.jpeg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="single-menu">
                    <img src="kopi2.jpeg" alt="">
                    <div class="menu-content">
                        <h5>Title <span>Rp.15.000</span></h5>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

@endsection
