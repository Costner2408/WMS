<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TAController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 // --------------------------- ADMIN ----------------------------





  // --------------------------- CLIENT ----------------------------
Route::get('/main','\App\Http\Controllers\TAController@home');
Route::get('/akun','\App\Http\Controllers\TAController@account');
Route::get('/archives','\App\Http\Controllers\TAController@archives');
Route::get('/archivesee','\App\Http\Controllers\TAController@archivesee');
Route::get('/complaint','\App\Http\Controllers\TAController@complaint');
