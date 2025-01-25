<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '"The only way to do great work is to love what you do." - Steve Jobs';
});

Route::get('/greet', [GreetController::class, 'show']);
