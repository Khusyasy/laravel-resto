<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/food', [MenuController::class, "show"]);

Route::get('/drink', [MenuController::class, "drink"]);

Route::get('/gallery', function () {
    return view('gallery');
});