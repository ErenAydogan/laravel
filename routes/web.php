<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Welcome</h1>";
});

Route::get('/home', function () {
    return view('home', ['name' => 'Shruti']);
});
