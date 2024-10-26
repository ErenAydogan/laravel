<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GreetingController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* Using row SQL queries */
    /* $users = DB::select('select * from users');
    dd($users); */

    /* Query builder */
    /* $users = DB::table('users')->whereNotNull('email')->orderBy('name')->get();
    dd($users); */

    /* Eloquent ORM */
    /* $students = Student::all(); */
    /* dd($students); */
    
    $students = Student::select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();

    foreach ($students as $student)
    {
        echo $student->name . "<br>";
    } 

    /* $student = new Student();
    $student->name = "Jane";
    $student->email = "jane@example.com";
    $student->save(); */
});

Route::get('/home', function () {
    return view('home', ['name' => 'Shruti']);
});

Route::get('/hello', [GreetingController::class, 'index']);
