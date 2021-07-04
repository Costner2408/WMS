@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -165px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Complaints</h1>
            <form style="text-align: center;" action="{{ route('client.complaint.post') }}" method="POST">
                @csrf

                <label id="label" style="font-size: 21px;">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}">

                <label id="label">Keluhan</label>
                <input class="form-control" type="text" style="height: 451px;margin-bottom: 46px;" id="komplain" name="complaint">

                <input type="submit" class="btn btn-primary" value="KIRIM" />
            </form>
        </div>
    </div>
@endsection
