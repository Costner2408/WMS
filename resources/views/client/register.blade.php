@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" id="jumbo" style="font-size: 23px;"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Register</h1>
            <form style="text-align: center;" action="{{ route('register.post') }}" method="POST">
                @csrf

                <label id="label" style="font-size: 21px;">Email</label>
                <input class="form-control" type="text" name="email">

                <label id="label" style="font-size: 21px;">Password</label>
                <input class="form-control" type="password" name="password">

                <label id="label" style="font-size: 21px;">Password Confirmation</label>
                <input class="form-control" type="password" name="password_confirmation">


                <label id="label" style="font-size: 21px;">ID Alat</label>
                <input class="form-control" type="text" name="device_id">

                <label id="label">Alamat</label>
                <input class="form-control" type="text" name="address">

                <label id="label">No.HP</label>
                <input class="form-control" type="text" name="phone">

                <label id="label">No.Rekening</label>
                <input class="form-control" type="text" name="account_number">

                <input type="submit" class="btn btn-primary" value="Register"/>
            </form>
            <p style="text-align: center;"><a class="btn btn-primary" role="button" id="log-reg" style="text-align: center;width: 110.5469px;font-size: 22px;">Register</a></p>
            <p style="font-size: 20px;text-align: center;">Already have an account?&nbsp;&nbsp;<a id="click-link" href="{{ route('login') }}">Click here</a>&nbsp;</p>
        </div>
    </div>
@endsection
