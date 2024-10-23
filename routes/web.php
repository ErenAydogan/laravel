<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class, 'index']);

Route::get('/home', function () {
    return view('home', ['name' => 'Shruti']);
});

Route::get('/hello', [GreetingController::class, 'index']);
