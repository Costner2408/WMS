@extends('client.layouts.app')

@section('content')
    <div class="container" id="contain">
        <div class="jumbotron" style="font-size: 23px;width: 813px;text-align: center;padding: 51px 32px;margin: -37px;margin-left: -75px;" id="jumbo"><span style="font-size: 18px;font-style: normal;font-weight: normal;font-family: Raleway, sans-serif;margin-top: 0;text-align: center;">WATERFLOW MONITORING SYSTEM</span>
            <h1 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Account settings</h1>
            <form style="text-align: center;" action="{{ route('client.edit.put') }}" method="POST">
                @csrf

                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="{{ $user->profile->id }}" />

                <label id="label" style="font-size: 21px;">Nama</label>
                <input class="form-control" type="text" id="nama" name="name" value="{{ $user->name }}">

                <label id="label" style="font-size: 21px;">Id Alat</label>
                <input class="form-control" type="text" id="id" name="device_id" value="{{ $user->profile->device_id }}">

                <label id="label">Alamat</label>
                <input class="form-control" type="text" id="alamat" name="address" value="{{ $user->profile->address }}">

                <label id="label">No.HP</label>
                <input class="form-control" type="text" id="number" name="phone" value="{{ $user->profile->phone }}">

                <label id="label">No.Rekening</label>
                <input class="form-control" type="text" id="rek" name="account_number" value="{{ $user->profile->account_number }}">

                <input type="submit" class="btn btn-primary" value="EDIT" />
            </form>
        </div>
    </div>
@endsection
