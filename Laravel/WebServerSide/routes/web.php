<?php

use Illuminate\Support\Facades\Route;
Route::get('/hello/{name}', function ($name) {
    return '<h2>Olá '.$name.'</h2>';
})->name('home.hello');

//"Links"
Route::get('/', function () {
    return view ('welcome');
})->name('home.welcome');

Route::get('/users', function(){
    return view ('Users');
})->name ('home.users');

Route::get('/hello', function () {
    return view ('hello');
})->name('home.hello');

//rota voltar ao home
Route::get('/home', function () {
    return view ('home.index');
})->name('homenomedarotaparachamarno');


//rota fallback
Route::fallback (function (){
    return view ('errors.fallback');
});

