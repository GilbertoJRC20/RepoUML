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

//----------------------------------------------------------

//rota ir para hello
Route::get('/hello', [IndexController::class,'helloWorld'] )
    ->name('home.hello');

//----------------------------------------------------------

//rota ir para tasks
Route::get('/tasks', [UserController::class, 'viewAllTasks']
    )->name('tasks.all');



//----------------------------------------------------------

//rota ir para users
Route::get('/users', [UserController::class, 'usersAll'] )
    ->name('users.all');

//rota ir para user
Route::get('/add-user', [UserController::class, 'addUser'] )
    ->name('users.add');

//rota ir para user
Route::get('/user', [UserController::class, 'viewUser'] )
->name('users.view');

//----------------------------------------------------------


Route::get('/hello/{name}', function ($name) {
        return '<h2>Olá '.$name.'</h2>';
});

//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});



