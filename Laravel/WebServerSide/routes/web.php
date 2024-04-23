<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TasksController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/tasks', [TasksController::class, 'viewAllTasks'] )
    ->name('tasks.all');

//----------------------------------------------------------

//rota ir para users
Route::get('/users', [UserController::class, 'usersAll'] )
    ->name('users.all');

//rota ir para user
Route::get('/add-user', [UserController::class, 'addUser'] )
    ->name('users.add');

//rota ir para user
Route::get('/user/{id}', [UserController::class, 'viewUser'] )
->name('users.view');

//rota ir para apagar user
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'] )
->name('users.delete');

//----------------------------------------------------------


Route::get('/hello/{name}', function ($name) {
        return '<h2>Olá '.$name.'</h2>';
});

//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});



