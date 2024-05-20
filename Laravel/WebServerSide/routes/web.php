<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view ('welcome');
})->name('home.welcome');



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
Route::get('/tasks', [TaskController::class, 'allTasks'] )
    ->name('tasks.all');

//rota ir para adicionar uma nova tarefa
Route::get('/add-task', [TaskController::class, 'addNewTask'] )
->name('tasks.add_new');

Route::get('/task/{id}', [TaskController::class, 'editTask'])
->name('tasks.edit');

Route::post('/create-task', [TaskController::class, 'createTask'])
->name('tasks.create');

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

//dota ir para dashboard
Route::get('/dashboard', [DashboardController::class, 'index'] )
    ->name('dashboard');


//----------------------------------------------------------

Route::get('/hello/{name}', function ($name) {
    return '<h2>Olá '.$name.'</h2>';
});

//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});
