<?php

use App\Http\Controllers\NieuwsbriefController;
use App\Http\Controllers\MedewerkerNieuwsbriefController;
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

// Route voor Nieuwsbrieven overzicht
Route::get('/pages/overzicht', [NieuwsbriefController::class, 'index'])->name('pages.overzicht');

//// Route voor het aanmaken van een nieuwsbrief
Route::get('/pages/nieuwsbrief', [NieuwsbriefController::class, 'create']);
Route::post('/storenieuwsbrief', [NieuwsbriefController::class, 'store']);

//// Route voor het bewerken van een nieuwsbrief
Route::get('/pages/bewerknieuwsbrief/{id}', [NieuwsbriefController::class, 'edit'])->name('pages.bewerknieuwsbrief');
Route::post('/bewerknieuwsbrief/{id}', [NieuwsbriefController::class, 'update']);

//// Route voor het verwijderen van een nieuwsbrief
Route::get('/verwijdernieuwsbrief/{id}', [NieuwsbriefController::class, 'destroy'])->name('verwijdernieuwsbrief');

//// Route voor het overzicht van medewerkers
Route::get('/pages/medewerkersoverzicht', [MedewerkerNieuwsbriefController::class, 'index'])->name('pages.medewerkersoverzicht');
