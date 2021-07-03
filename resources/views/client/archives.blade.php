@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -165px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">History archives</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">check previous stored data by month</label></form>
            <div class="dropdown show"><button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="true" data-toggle="dropdown" id="dropdown" type="button">Pilih Bulan</button>
                <div class="dropdown-menu show"><a class="dropdown-item" href="#">januari</a><a class="dropdown-item" href="#">februari</a><a class="dropdown-item" href="#">Maret</a><a class="dropdown-item" href="#">April</a>
                    <a class="dropdown-item" href="#">Mei</a>
                    <a class="dropdown-item" href="#">Juni</a>
                    <a class="dropdown-item" href="#">Juli</a>
                    <a class="dropdown-item" href="#">Agustus</a>
                    <a class="dropdown-item" href="#">September</a>
                    <a class="dropdown-item" href="#">Oktober</a>
                    <a class="dropdown-item" href="#">November</a>
                    <a class="dropdown-item" href="#">Desember</a>
                </div>

            </div>
            <div class="dropdown show"><button class="btn btn-primary btn-lg dropdown-toggle button2" aria-expanded="true" data-toggle="dropdown" id="dropdown" type="button">Pilih Tahun</button>
                <div class="dropdown-menu show"><a class="dropdown-item" href="#">2021</a><a class="dropdown-item" href="#">2022</a><a class="dropdown-item" href="#">2023</a></div>
            </div>
            <p style="text-align: center;margin-top: 30px;"><button class="btn btn-primary" id="dropdown" type="button" style="width: 105.7031px;height: 50px;"><a id="dropdown" href="liatarsip">Check</a></button></p>
        </div>
    </div>
@endsection
