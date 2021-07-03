@extends('admin.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -165px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">SMS</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">Username</label><input class="form-control" type="text" id="text-input"><label id="label" style="font-size: 21px;">manual phone number</label><input class="form-control" type="text" id="text-input" value=><label id="label">message</label><input class="form-control" type="text" style="height: 451px;margin-bottom: 46px;"></form>
            <p style="text-align: center;"><a class="btn btn-primary" role="button" id="log-reg" style="text-align: center;width: 110.5469px;font-size: 18px;">submit</a></p>
        </div>
    </div>
    <div class="container" id="contain">
        <div class="jumbotron" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -165px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">SMS automatic</h1>
            <p style="text-align: center;"><a class="btn btn-primary" role="button" id="log-reg" style="text-align: center;width: 189.5469px;font-size: 18px;height: 74px;">send&nbsp; message to all client</a></p>
        </div>
    </div>
@endsection
