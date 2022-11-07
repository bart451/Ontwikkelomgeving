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

// Example Routes
Route::view('/', 'blank');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('blank');
});



Route::view('/pages/overzicht', 'pages.overzicht');
Route::view('/pages/nieuwsbrief', 'pages.nieuwsbrief');
Route::view('/pages/bewerknieuwsbrief', 'pages.bewerknieuwsbrief');
