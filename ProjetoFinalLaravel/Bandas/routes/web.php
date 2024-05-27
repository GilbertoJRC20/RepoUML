<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\{Route};
use App\Http\Controllers\BandController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('welcome');
})->name('home.welcome');


//----------------------------------------------------------

// Rota bandas
Route::get('/home', [BandController::class, 'home'] )
    ->name('bands.home');

//----------------------------------------------------------

Route::get('/albuns', [AlbumController::class, 'albuns'] )
    ->name('albuns.view');


//----------------------------------------------------------

//rota ir para dashboard
Route::get('/dashboard', [DashboardController::class, 'index'] )
    ->name('dashboard');

//----------------------------------------------------------

// Rota Fallback
Route::fallback(function () {
    return view ('errors.fallback');
});
