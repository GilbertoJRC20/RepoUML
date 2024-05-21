<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
´
// Rota Hello
Route::get('/hello/{id}', function ($id) {
    return '<h1>Hello</h1>'.$id;
});
