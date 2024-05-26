<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//----------------------------------------------------------

// Rota bandas
Route::get('/home', [BandController::class, 'home'] )
    ->name('bands.home');

//----------------------------------------------------------

//rota ir para dashboard
Route::get('/dashboard', [DashboardController::class, 'index'] )
    ->name('dashboard');

//----------------------------------------------------------

// Rota Fallback
Route::fallback(function () {
    return view ('errors.fallback');
});
