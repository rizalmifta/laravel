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

Route::get('/', function () {
    return view('halamanLogin');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard','DashboardController@index');

Route::get('/halamanLogin','LoginController@login');
Route::get('/halamanRegister','LoginController@register');
Route::get('/halamanHome','HomeController@home');
Route::get('/halamanService','HomeController@service');
Route::get('/halamanContact','HomeController@contact');
Route::get('/halamanAbout','HomeController@about');

