<?php

use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});


Route::get('DatabaseTest', [DatabaseController::class, 'index']);