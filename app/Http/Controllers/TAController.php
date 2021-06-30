<?php

namespace App\Http\Controllers;

use DB;
use App\Models\TA;
use Illuminate\Http\Request;

class TAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TA  $tA
     * @return \Illuminate\Http\Response
     */
    public function show(TA $tA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TA  $tA
     * @return \Illuminate\Http\Response
     */
    public function edit(TA $tA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TA  $tA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TA $tA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TA  $tA
     * @return \Illuminate\Http\Response
     */
    public function destroy(TA $tA)
    {
        //
    }
    // --------------------------- ADMIN ----------------------------

    public function Ahome(){

        return view('admin.home');
    }

    public function Aaccount(){

        return view('admin.account');
    }

    public function Acomplaint(){

        return view('admin.complaint');
    }

    public function Alogin(){

        return view('admin.login');
    }

    public function Asms(){

        return view('admin.sms');
    }




    // --------------------------- CLIENT ----------------------------
    
    public function home(){
       
        $Volumes = TA::where('Nama','Adinda')->pluck('Volume');
        // $Volumes = $Volume->Volume ;
        return view('client.home',compact('Volumes'));
        // $waterflow_monitoring_system = DB::select('select Volume from waterflow_monitoring_system where Nama = ?', ['Adinda']);
        // return View::make('client.home')->with('results', $results);
        // $str_json = json_encode($request->results);
        // echo  $str_json; 
        // return view('client.home', ['results'=>$waterflow_monitoring_system[0]]);
    }

    public function account(){

        return view('client.account');
    }

    public function archives(){

        return view('client.archives');
    }

    public function archivesee(){

        return view('client.archivesee');
    }

    public function complaint(){

        return view('client.complaint');
    }

    public function editacc(){

        return view('client.edit');
    }

        public function login(){

        return view('client.login');
    }

    public function register(){

        return view('client.register');
    }

    public function wrong(){

        return view('client.wrong');
    }
}
