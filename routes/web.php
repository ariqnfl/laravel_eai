<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','ApiController@index');
Route::get('/','ApiController@index');

Route::get('auth/{provider}','Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\SocialiteController@handleProviderCallback');
