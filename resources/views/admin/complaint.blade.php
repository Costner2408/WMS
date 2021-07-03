@extends('admin.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron jumbotron-fluid" style="font-size: 23px;width: 954px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -144px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Client complaints</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">check client's personal complaints</label>
                <div class="table-responsive" style="border-style: solid;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">nama</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">tanggal</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">complaints</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="border-color: #ffffff;"></td>
                            <td style="border-color: #ffffff;"></td>
                        </tr>
                        <tr style="border-color: #ffffff;">
                            <td style="border-color: #ffffff;"></td>
                            <td style="border-color: #ffffff;"></td>
                        </tr>
                        <tr style="border-color: #ffffff;">
                            <td style="border-color: #ffffff;"></td>
                            <td style="border-color: #ffffff;"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <p style="text-align: center;"><button class="btn btn-primary" id="dropdown" type="button" style="width: 96.5938px;height: 51px;font-size: 21px;margin-top: 20px;"><a id="back" class="complaint" href="Admin_Home.html" style="font-size: 26px;">Back</a></button></p>
        </div>
    </div>
@endsection
