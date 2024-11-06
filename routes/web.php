<?php

use Illuminate\Support\Facades\Route;

//Added the middleware guest to create a guest user to test reverb
Route::get('/', function () {
    return view('welcome');
})->middleware(['guest']);
