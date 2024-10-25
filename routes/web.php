<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* Using row SQL queries */
    /* $users = DB::select('select * from users');
    dd($users); */

    /* Query builder */
    $users = DB::table('users')->whereNotNull('email')->orderBy('name')->get();
    dd($users);
});

Route::get('/home', function () {
    return view('home', ['name' => 'Shruti']);
});

Route::get('/hello', [GreetingController::class, 'index']);
