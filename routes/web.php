<?php

use Illuminate\Support\Facades\Route;
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
    return view('public.index');
});
Route::get('/team', function () {
    return view('public.team');
});
Route::get('/events', function () {
    return view('public.events');
});
Route::get('/programs', function () {
    return view('public.programs');
});
Route::get('/faq', function () {
    return view('public.faq');
});
Route::get('/contact', function () {
    return view('public.contact');
});

Route::get('subscribe/{token}', "SubscriberController@verify");
Route::post('subscribe', "SubscriberController@subscribe");

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::resource('subscriber', 'SubscriberController');
    Route::resource('setting', 'SettingsController');
});
Route::get('/home', 'HomeController@index')->name('home');
