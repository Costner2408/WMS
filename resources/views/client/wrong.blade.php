@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" id="jumbo" style="font-size: 23px;"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Log in</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">Sorry, invalid input of username/password</label></form>
            <p style="text-align: center;"><a class="btn btn-primary" role="button" id="log-reg" style="text-align: center;font-size: 21px;">Back</a></p>
            <p style="font-size: 20px;text-align: center;">Dont have an account?&nbsp;&nbsp;<a id="click-link" class="register" href="{{ route('register') }}">Click here</a>&nbsp;</p>
            <p style="font-size: 20px;text-align: center;">&nbsp;Admin? please login&nbsp;<a id="click-link" class="admin" href="{{ route('admin.login') }}">&nbsp;here</a>&nbsp;</p>
        </div>
    </div>
@endsection
