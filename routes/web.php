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
 Route::get('/amain','\App\Http\Controllers\TAController@Ahome');
 Route::get('/aaccount','\App\Http\Controllers\TAController@Aaccount');
 Route::get('/acomplaint','\App\Http\Controllers\TAController@Acomplaint');
 Route::get('/alogin','\App\Http\Controllers\TAController@Alogin');
 Route::get('/sms','\App\Http\Controllers\TAController@Asms');






  // --------------------------- CLIENT ----------------------------
Route::get('/main','\App\Http\Controllers\TAController@home');
Route::get('/akun','\App\Http\Controllers\TAController@account');
Route::get('/arsip','\App\Http\Controllers\TAController@archives');
Route::get('/liatarsip','\App\Http\Controllers\TAController@archivesee');
Route::get('/komplain','\App\Http\Controllers\TAController@complaint');
Route::get('/edit','\App\Http\Controllers\TAController@editacc');
Route::get('/login','\App\Http\Controllers\TAController@login');
Route::get('/register','\App\Http\Controllers\TAController@register');
Route::get('/wrong','\App\Http\Controllers\TAController@wrong');