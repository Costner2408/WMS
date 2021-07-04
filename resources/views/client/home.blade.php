@extends('client.layouts.app')

@section('content')
    <div class="container">
        <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" id="intro" src="assets/img/intro.jpg">
            <div class="text-center intro-text p-5 rounded bg-faded" id="phone" style="width: 325.5px;height: 397px;max-width: 800 px;">
                <h2 class="section-heading mb-4"><span id="upper" class="section-heading-upper">this month's Real Time data</span><span id="lower" class="section-heading-lower">VOLUME</span></h2>
                <h3 style="font-family:'Allerta Stencil',sans-serif,font-size: 45px;">{{ $waterflow ? $waterflow->volume : '-' }} L</h3><span style="font-size: 51px;font-family: Raleway;color: rgb(47,52,56);font-weight: 100;margin-top: 30px;">BIAYA</span>
                <h3 style="font-family:'Allerta Stencil',sans-serif,font-size: 45px;">Rp.{{ $waterflow ? $waterflow->cost : '-' }}</h3>
            </div>
        </div>
    </div>
@endsection
