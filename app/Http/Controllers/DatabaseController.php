<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function index() {
/*         $users=DB::select('select name, email from users');
        dd($users); */

        $users = DB::table('users')->select('name', 'email')->WhereNotNull('email')->orderBy('name')->get();
        dd($users);
    }
}
