@extends('admin.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron jumbotron-fluid" style="font-size: 23px;width: 954px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -144px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">account data</h1>
            <form style="text-align: center;"><label id="label" style="font-size: 21px;">check client's personal account data&nbsp;</label>
                <div class="table-responsive" style="border-style: solid;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">Nama</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">ID Alat</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">Alamat</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">No Hp</th>
                            <th style="border-style: solid;border-top-color: rgb(4,4,4);border-bottom-color: rgb(4,4,4);">No Rekening</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($profiles as $user)
                            <tr>
                                <td style="border-color: #ffffff;"> {{ $user->name }}</td>
                                <td style="border-color: #ffffff;"> {{ $user->profile->device_id }}</td>
                                <td style="border-color: #ffffff;"> {{ $user->profile->address }}</td>
                                <td style="border-color: #ffffff;"> {{ $user->profile->phone }}</td>
                                <td style="border-color: #ffffff;"> {{ $user->profile->account_number }}</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            <p style="text-align: center;"><button class="btn btn-primary" id="dropdown" type="button" style="width: 96.5938px;height: 51px;font-size: 21px;margin-top: 20px;"><a id="back" href="{{ route('admin.main') }}" style="font-size: 26px;">Back</a></button></p>
        </div>
    </div>
@endsection
