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

                            <tr>
                                <td style="border-color: #ffffff;">Costner</td>
                                <td style="border-color: #ffffff;"> 1234</td>
                                <td style="border-color: #ffffff;"> Kota Mas</td>
                                <td style="border-color: #ffffff;"> 087889376067</td>
                                <td style="border-color: #ffffff;"> 087889376067</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="border-color: #ffffff;">Winter</td>
                                <td style="border-color: #ffffff;"> 12345</td>
                                <td style="border-color: #ffffff;"> Kotamas VI no 11</td>
                                <td style="border-color: #ffffff;"> +6281312040156</td>
                                <td style="border-color: #ffffff;"> 45678865645</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="border-color: #ffffff;">Adinda</td>
                                <td style="border-color: #ffffff;">23456</td>
                                <td style="border-color: #ffffff;">indramayu</td>
                                <td style="border-color: #ffffff;">081222278709</td>
                                <td style="border-color: #ffffff;"> 325675331</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="border-color: #ffffff;">Ismalian</td>
                                <td style="border-color: #ffffff;"> 56789</td>
                                <td style="border-color: #ffffff;"> Warsaw, Polland</td>
                                <td style="border-color: #ffffff;"> 08112245678</td>
                                <td style="border-color: #ffffff;"> 675428767</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="border-color: #ffffff;">Jarali</td>
                                <td style="border-color: #ffffff;"> 98765</td>
                                <td style="border-color: #ffffff;">Dressorssa desa sukra ketan</td>
                                <td style="border-color: #ffffff;"> 087878787891</td>
                                <td style="border-color: #ffffff;"> 123445677</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="border-color: #ffffff;">Costner</td>
                                <td style="border-color: #ffffff;"> 78654</td>
                                <td style="border-color: #ffffff;"> Huesca</td>
                                <td style="border-color: #ffffff;"> 087889376067</td>
                                <td style="border-color: #ffffff;"> 4568532112</td>
                                <td style="border-color: #ffffff;"></td>
                            </tr>
                   
                        </tbody>
                    </table>
                </div>
            </form>
            <p style="text-align: center;"><button class="btn btn-primary" id="dropdown" type="button" style="width: 96.5938px;height: 51px;font-size: 21px;margin-top: 20px;"><a id="back" href="{{ route('admin.main') }}" style="font-size: 26px;">Back</a></button></p>
        </div>
    </div>
@endsection
