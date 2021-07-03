@extends('admin.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron jumbotron-fluid" style="font-size: 23px;width: 954px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -144px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Real time data</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">check client's data on this month</label>
                <div class="table-responsive" style="border-style: solid;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">nama</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">id alat</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">volume</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">biaya</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">Tanggal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($waterflow as $water)
                            <tr>
                                <td style="border-color: #ffffff  text-align: center;"> {{ $water->name }}
                                <td style="border-color: #ffffff  text-align: center;"> {{ $water->device_id }}
                                <td style="border-color: #ffffff  text-align: center;"> {{ $water->volume }}
                                <td style="border-color: #ffffff  text-align: center;"> {{ $water->cost }}
                                <td style="border-color: #ffffff  text-align: center;"> {{ $water->created_at->format('d/m/Y') }}
                                </td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection
