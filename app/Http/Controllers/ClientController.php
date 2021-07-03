<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waterflow;
use App\Models\User;
use App\Models\Profile;
use App\Models\Complaint;
use App\Providers\RouteServiceProvider;


class ClientController extends Controller
{
    public function home(){
        // $this->name = $name;
        $name = auth()->user()->name;
        $waterflow = Waterflow::orderBy('created_at', 'ASC')->where('name', $name)->first();

        return view('client.home', compact('waterflow'));
    }

    public function profile(){
        $name = auth()->user()->name;
        $profile  = Profile::with(['users', function ($query) use ($name) {
            $query->where('name', $name);
        }])->first();

        return view('client.account',compact('profile'));
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

    public function complaintSave(Request $request) {
        $complaint = [
            'name' => $request->name,
            'complaint' => $request->complaint
        ];

        Complaint::create($complaint);

        return redirect()->route('client.complaint');
    }

    public function editacc() {
        $name = auth()->user()->name;
        $profile = Profile::with(['users'], function ($query) use ($name) {
            $query->where('name', $name);
        })->first();

        return view('client.edit', compact('profile'));
    }

    public function edit(Request $request) {
        $name = auth()->user()->name;
        $profile = [
            'device_id' => $request->device_id,
            'address' => $request->address,
            'phone' => $request->phone,
            'account_number' => $request->account_number
        ];

        if ($name != $request->name) {
            User::where('name', $name)->update(['name' => $request->name]);
        }

        Profile::where('id', $request->id)->update($profile);

        return redirect()->route('client.profile');
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
