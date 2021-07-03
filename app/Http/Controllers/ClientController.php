<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TA;
use App\Models\Akun;
use App\Models\Complaints;
use App\Providers\RouteServiceProvider;


class ClientController extends Controller
{


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth');
    }
 //----------------------------CLIENT-------------------------


    public function home(){
        // $this->name = $name;
        $name = 'Ismalian';
        $Volumes = TA::orderBy('Tanggal', 'ASC')->where('Nama',$name)->pluck('Volume');
        $Biayas = TA::where('Nama',$name)->pluck('Biaya');
        // $Volumes = TA::where('Nama',$name)->latest('Volume')->first();
       
        return view('client.home',['Volumes'=> $Volumes,'Biayas'=>$Biayas]);
    }

    public function account($name){
        // dd($name);
        $akuns = Akun::where('Nama',$name)->pluck('Nama');
        $showids = Akun::where('Nama',$name)->pluck('Id_Alat');  
        $alamats = Akun::where('Nama',$name)->pluck('Alamat');  
        $numbers = Akun::where('Nama',$name)->pluck('No_Hp');  
        $reks = Akun::where('Nama',$name)->pluck('No_Rekening');  

        return view('client.account',compact('akuns','showids','alamats','reks','numbers'));
    }

    public function archives(){



        return view('client.archives');
    }

    public function archivesee(){



        return view('client.archivesee');
    }

    public function complaint(Request $request){

       
    $complaints = new Complaints;
    $complaints->Nama = $request->name;
    $complaints->Tanggal = $request->tanggal;
    $complaints->Komplain = $request->komplain;
    $complaints->save();

        return view('client.complaint');
    }

    public function editacc(Request $request){

        $akun = new Akun;
        $akun->Nama = $request->nama;
        $akun->Id_Alat = $request->id;
        $akun->Alamat = $request->alamat;
        $akun->No_Hp = $request->number;
        $akun->No_Rekening = $request->rek;
        $akun->save();

        return redirect()->route('edit');
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

    public function konten(){

        return view('client.content');
    }

    
}
