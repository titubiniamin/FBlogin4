<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\participantRegisterController;
use App\Http\Controllers\SocialController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Route::post('/UpdateRegister', [HomeController::class,'UpdateRegister']);
Route::view('/test', 'test');
