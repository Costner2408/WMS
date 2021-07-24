<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waterflow;
use App\Models\Profile;
use App\Models\Complaint;

class AdminController extends Controller
{
    public function home(){
        $waterflow = Waterflow::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('admin.home', compact('waterflow'));
    }

    public function profiles(){

        return view('admin.propil');

    }   
    public function profile(){

        
        $profiles = Profile::with(['user'])->all();
        return view('admin.account', compact('profiles'));
    }

    public function complaint(){

        $complaints = Complaint::orderBy('Tanggal', 'DESC')->get(); 

        return view('admin.complaint', compact('complaints'));
    }

    public function login(){

        return view('admin.login');
    }

    public function archive(){

        return view('admin.archive');
    }

    public function archivesee(Request $request){

        $waterflow = Waterflow::whereMonth('created_at', $request->month)->get();
        return view('admin.archivesee' , compact('waterflow'));
    }

}
