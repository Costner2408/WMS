
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Account </title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/Pretty-Footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-5.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-6.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled-7.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/untitled.css') }}">
</head>

<body style="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), {{ URL::asset('assets/img/bg2.jpg') }};">
<h1 class="text-center text-white d-none d-lg-block site-heading" id="title-heading"><span class="text-primary site-heading-upper mb-3" style="font-size: 25px;color: var(--blue);font-style: normal;">monitors your current clean water usage along with the cost</span><span id="Title" class="site-heading-lower" style="font-size: 59px;">waterflow monitoring system</span></h1>
<nav class="navbar navbar-dark navbar-expand-lg bg-dark py-lg-4" id="mainNav">
    <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">WMS</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('client.main') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">about</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('client.profile') }}">account</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('client.complaint') }}">complaints</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('client.archive') }}">Archives</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div><button data-target="#navbarResponsive" data-toggle="collapse" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
    </div>
</nav>
<section class="site-heading">
<div class="container">
        <!-- <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" id="intro" src="assets/img/intro.jpg"> -->
            <div class="text-center intro-text p-5 rounded bg-faded" id="phone" style="width: 325.5px;height: 397px;max-width: 800 px;">
                <h2 class="section-heading mb-4"><span id="upper" class="section-heading-upper">this month's Real Time data</span><span id="lower" class="section-heading-lower">VOLUME</span></h2>
                <h3 style="font-family:'Allerta Stencil',sans-serif,font-size: 45px;">{{ $waterflow ? $waterflow->volume : '-' }} L</h3><span style="font-size: 51px;font-family: Raleway;color: rgb(47,52,56);font-weight: 100;margin-top: 30px;">BIAYA</span>
                <h3 style="font-family:'Allerta Stencil',sans-serif,font-size: 45px;">Rp.{{ $waterflow ? $waterflow->cost : '-' }}</h3>
            </div>
        </div>
    </div>
</section>
<!-- <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="text-center cta-inner rounded">
                        <h2 class="section-heading mb-4"><span class="section-heading-upper">Our goal</span><span class="section-heading-lower">why ?</span></h2>
                        <p class="mb-0">When you walk into our system to start your day, we are dedicated to providing you with friendly service, a welcoming system, and above all else, excellent prrogram made with the highest quality frameworks. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="color: rgb(167,162,162);text-align: center;font-family: Raleway, sans-serif;font-size: 22px;">Waterflow Monitoring System</a></h3>
                <p class="links"><a href="#">Measuring</a><strong> ?? </strong><a href="#">Storing</a><strong> ?? </strong><a href="#">Distributing</a><strong> ?? ?? </strong><a href="#">Connecting</a><strong> ?? </strong><a href="#">Assuring</a></p>
                <p class="company-name">Achmadi &amp; Adinda ?? 2021</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Jl.Gegerkalong Hilir</span> Bandung, Indonesia</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +6287889376067</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">WMS@company.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Website ini adalah Proyek Tugas Akhir Program Studi D3-Teknik Telekomunikasi Politeknik Negeri Bandung</p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </div>
</footer> -->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/current-day.js') }}"></script>
</body>

</html>






