<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role_id = auth()->user()->role_id;
        switch($role_id) {
            case 1:
                return redirect()->route('admin.main');
            case 2:
                return redirect()->route('client.main');
            default:
                return view('homeg');
        }
    }
}
