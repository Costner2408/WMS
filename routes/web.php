<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TAController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;


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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegistrationController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegistrationController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 // --------------------------- ADMIN ----------------------------
 Route::get('/amain','\App\Http\Controllers\AdminController@Ahome');
 Route::get('/aaccount','\App\Http\Controllers\AdminController@Aaccount')->name('index');
 Route::get('/acomplaint','\App\Http\Controllers\AdminController@Acomplaint');
 Route::get('/alogin','\App\Http\Controllers\AdminController@Alogin');
 Route::get('/sms','\App\Http\Controllers\AdminController@Asms');





  // --------------------------- CLIENT ----------------------------
Route::get('/main','\App\Http\Controllers\ClientController@home');
Route::get('/akun','\App\Http\Controllers\ClientController@account');
Route::get('/arsip','\App\Http\Controllers\ClientController@archives');
Route::get('/liatarsip','\App\Http\Controllers\ClientController@archivesee');
Route::get('/komplain','\App\Http\Controllers\ClientController@complaint');
Route::get('/edit','\App\Http\Controllers\ClientController@editacc')->name('edit');
// Route::get('/login','\App\Http\Controllers\ClientController@login');
// Route::get('/register','\App\Http\Controllers\ClientController@register');
Route::get('/wrong','\App\Http\Controllers\ClientController@wrong');
Route::get('/konten','\App\Http\Controllers\ClientController@konten');