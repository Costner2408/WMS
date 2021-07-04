<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function register(Request $request) {
        dd($request->all());
        $profile = [
            'device_id' => $request->device_id,
            'address' => $request->address,
            'phone' => $request->phone,
            'account_number' => $request->account_number,
        ];

        if (count($profile) > 1) {
            $created_profile = Profile::create($profile);
        }

        User::create([
            'role_id' => 2,
            'profile_id' => $created_profile->id,
            'name' => $request->name,
            'email' => $request-> email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login');
    }
}
