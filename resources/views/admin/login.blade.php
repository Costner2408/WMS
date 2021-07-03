@extends('admin.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" id="jumbo" style="font-size: 23px;"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Admin Log in</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">Username</label><input class="form-control" type="text" id="text-input"><label id="label" style="font-size: 21px;">Id Alat</label><input class="form-control" type="text" id="text-input"></form>
            <p style="text-align: center;"><a class="btn btn-primary" role="button" id="log-reg" style="text-align: center;font-size: 21px;">Login</a></p>
            <p style="font-size: 20px;text-align: center;">Dont have an account?&nbsp;&nbsp;<a id="click-link" class="register" href="register">Click here</a></p>
            <p style="font-size: 20px;text-align: center;">&nbsp;Client? please login&nbsp;&nbsp;<a id="click-link" class="client" href="login">Here</a>&nbsp;</p>
        </div>
    </div>
@endsection
