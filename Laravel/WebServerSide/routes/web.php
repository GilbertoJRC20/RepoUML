<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\TaskController;
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
Route::get('/tasks', [TaskController::class, 'viewAllTasks'] )
    ->name('tasks.all');

//rota ir para adicionar uma nova tarefa
Route::post('/add-task', [UserController::class, 'addNewTask'] )
->name('tasks.add_new');


//----------------------------------------------------------

//rota ir para users
Route::get('/users', [UserController::class, 'usersAll'] )
    ->name('users.all');

//rota para adicionar user
Route::get('/add-user', [UserController::class, 'addUser'] )
    ->name('users.add');

//rota ir para ver user
Route::get('/user/{id}', [UserController::class, 'viewUser'] )
->name('users.view');

//rota ir para apagar user
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'] )
->name('users.delete');

//rota ir para criar um novo user
Route::post('/create-user', [UserController::class, 'createUser'] )
->name('users.create');

//----------------------------------------------------------

//rota ir para gifts
Route::get('/gifts', [GiftController::class, 'allGifts'] )
    ->name('gifts.all');

//rota ir para adicionar gifts
Route::get('/add-gifts', [GiftController::class, 'addGifts'] )
    ->name('gifts.add');


//rota ir para ver gifts
Route::get('/gift/{id}', [GiftController::class, 'getEachGift'] )
    ->name('gifts.view');


//rota ir para apagar gifts
Route::get('/delete-gifts/{id}', [GiftController::class, 'deleteGifts'] )
    ->name('gifts.delete');

//----------------------------------------------------------

Route::get('/hello/{name}', function ($name) {
        return '<h2>Olá '.$name.'</h2>';
});

//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});



