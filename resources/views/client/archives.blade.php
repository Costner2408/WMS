@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -165px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">History archives</h1>
            <form style="text-align: center;">
                <label id="label" style="font-size: 21px;">check previous stored data by month</label>
            </form>
            <div class="dropdown show"><button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="true" data-toggle="dropdown" id="dropdown" type="button">Pilih Bulan</button>
                <form action="{{ route('client.liatarsip') }}" method="POST">
                @csrf    
                    <select name="month">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>    
                    </select>
                <input type="submit" value="Submit">
                </form> 
                </div>

            </div>
        </div>
    </div>
@endsection
