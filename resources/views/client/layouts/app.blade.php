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

@include('client.layouts.header')

<section class="site-heading">
<div class="row">
    @yield('content')
    </div>
</section>

<div class="row">
    @include('client.layouts.footer')
</div>    
<div>
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/current-day.js') }}"></script>
</body>

</html>
