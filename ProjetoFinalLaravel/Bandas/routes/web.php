<?php

use App\Http\Controllers\BandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('welcome');
});


//----------------------------------------------------------

// Rota bandas
Route::get('/bands', [BandController::class, 'allBands'] )
    ->name('bands.all');





// Rota Homepage
Route::get('/home', [IndexController::class, 'homepage'] )
    ->name('home.index');

// Rota Fallback
Route::fallback(function () {
    return view ('errors.fallback');
});
