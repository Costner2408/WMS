<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waterflow;

class APIController extends Controller
{
    public function getwaterflow(){

        $waterflow = Waterflow::orderBy('created_at', 'ASC')->first();

        return response()->json($waterflow);
    }
}
