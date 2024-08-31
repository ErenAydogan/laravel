<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/* Route::get('/about', function() {
    return "This is about page";
}); */

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
