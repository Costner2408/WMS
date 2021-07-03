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
Route::get('login', '\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', '\App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', '\App\Http\Controllers\ClientController@register')->name('register');
Route::post('register', '\App\Http\Controllers\Auth\RegistrationController@register');

//// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 // --------------------------- ADMIN ----------------------------
 Route::group([
     'middleware' => 'auth',
     'prefix' => 'admin',
     'as' => 'admin.'
 ], function () {
     Route::get('/main','\App\Http\Controllers\AdminController@home')->name('main');
     Route::get('/profile','\App\Http\Controllers\AdminController@profile')->name('profile');
     Route::get('/complaint','\App\Http\Controllers\AdminController@complaint')->name('complaint');
     Route::get('/login','\App\Http\Controllers\AdminController@login')->name('login');
     Route::get('/sms','\App\Http\Controllers\AdminController@sms')->name('sms');
 });



  // --------------------------- CLIENT ----------------------------
Route::group([
    'middleware' => 'auth',
    'prefix' => 'client',
    'as' => 'client.'
], function() {
    Route::get('/main','\App\Http\Controllers\ClientController@home')->name('main');
    Route::get('/akun','\App\Http\Controllers\ClientController@profile')->name('profile');
    Route::get('/arsip','\App\Http\Controllers\ClientController@archives')->name('archive');
    Route::get('/liatarsip','\App\Http\Controllers\ClientController@archivesee')->name('archive.detail');

    Route::get('/komplain','\App\Http\Controllers\ClientController@complaint')->name('complaint');
    Route::post('/komplain','\App\Http\Controllers\ClientController@complaintSave')->name('complaint.post');

    Route::get('/edit','\App\Http\Controllers\ClientController@editacc')->name('edit');
    Route::put('/edit', '\App\Http\Controllers\ClientController@edit')->name('edit.put');

    Route::get('/wrong','\App\Http\Controllers\ClientController@wrong')->name('wrong');
    Route::get('/konten','\App\Http\Controllers\ClientController@konten')->name('content');
});
