<?php

use App\Http\Controllers\BandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//----------------------------------------------------------

// Rota bandas
Route::get('/home', [BandController::class, 'home'] )
    ->name('bands.home');


// Rota Fallback
Route::fallback(function () {
    return view ('errors.fallback');
});
