<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.index');
})->name('app.index');

Route::get('/about', function () {
    return view('app.about');
})->name('app.about');
