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

// Dashboard
Route::view('/', 'blank');
Route::match(['get', 'post'], '/dashboard', function () {
    return view('blank');
});

//// Route voor het aanmaken van een nieuwsbrief
Route::get('/pages/nieuwsbrief', [\App\Http\Controllers\NieuwsbriefController::class, 'getData'])->name('pages.nieuwsbrief');

//// Route voor het bewerken van een nieuwsbrief
Route::view('/pages/bewerknieuwsbrief', 'pages.bewerknieuwsbrief');

// Route voor Nieuwsbrieven overzicht
Route::get('/pages/overzicht', [\App\Http\Controllers\NieuwsbriefController::class, 'index'])->name('pages.overzicht');

