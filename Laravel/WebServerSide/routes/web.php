<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view ('welcome');
})->name('home.welcome');

Route::get('/hello/{name}', function ($name) {
    return '<h2>Olá '.$name.'</h2>';
})->name('home.hello');



//"Links"
//rota voltar ao home
Route::get('/home', [IndexController::class,'homePage'] )
    ->name('homenomedarotaparachamarno');

//rota ir para users
Route::get('/users', [UserController::class, 'usersAll'] )
    ->name('users.all');

//rota ir para hello
Route::get('/hello', [IndexController::class,'helloWorld'] )
    ->name('home.hello');

//rota ir para tasks
Route::get('/tasks', function () {
        return view('tasks.all_tasks');
    })->name('tasks.all');


Route::get('/hello/{name}', function ($name) {
        return '<h2>Olá '.$name.'</h2>';
});

//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});



