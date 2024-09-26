<?php

use App\Http\Controllers\DatabaseController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $students = Student::select('name', 'email')->whereNotNull('email')->orderBy('name')->get();
    dd($students);
});


Route::get('DatabaseTest', [DatabaseController::class, 'index']);