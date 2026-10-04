<?php

use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);