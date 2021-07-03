@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron jumbo-fluid" id="jumbo" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -76px;"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Account settings</h1>
            <table class="table table-borderless">
                <tr>
                    <td width="200">Nama</td>
                    <td>: {{ $profile->user->name }}</td>
                </tr>
                <tr>
                    <td>ID Alat</td>
                    <td>: {{ $profile->device_id }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $profile->address }}</td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>: {{ $profile->phone }}</td>
                </tr>
                <tr>
                    <td>No. Rekening</td>
                    <td>: {{ $profile->account_number }}</td>
                </tr>
            </table>
            <p style="text-align: center;"><a class="btn btn-primary" role="button" id="log-reg" style="text-align: center;width: 110.5469px;font-size: 18px;" href="{{ route('client.edit') }}">EDIT</a>
        </div>
    </div>
@endsection
