<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TA;
use App\Models\Akun;
use App\Models\Complaints;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    
    public function Ahome(){

        $waterflow_monitoring_system = TA::orderBy('Tanggal', 'ASC')->limit(3)->get();

        return view('admin.home',compact('waterflow_monitoring_system'));
    }

    public function Aaccount(){

        $akun = Akun::all(); 
        return view('admin.account',compact('akun'));
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

}
