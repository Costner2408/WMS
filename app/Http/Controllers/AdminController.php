<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waterflow;
use App\Models\Profile;
use App\Models\Complaint;

class AdminController extends Controller
{
    public function home(){
        $waterflow = Waterflow::orderBy('created_at', 'ASC')->limit(3)->get();

        return view('admin.home', compact('waterflow'));
    }

    public function profile(){

        $profiles = Profile::with('user')->get();
        return view('admin.account', compact('profiles'));
    }

    public function complaint(){

        return view('admin.complaint');
    }

    public function login(){

        return view('admin.login');
    }

    public function sms(){

        return view('admin.sms');
    }

}
