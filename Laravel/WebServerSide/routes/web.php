<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/hello/{name}', function ($name) {
    return '<h2>Olá '.$name.'</h2>';
})->name('home.hello');



//"Links"
Route::get('/', function () {
    return view ('welcome');
})->name('home.welcome');

Route::get('/users', [UserController::class, 'usersAll'] )
    ->name('users.all');

Route::get('/hello', [IndexController::class,'homeHello'] )
    ->name('home.hello');


//rota voltar ao home
Route::get('/home', [IndexController::class,'homePage'] )
    ->name('homenomedarotaparachamarno');


//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});



