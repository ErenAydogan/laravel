<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseController extends Controller
{
    public function index() {
        /* Getting all data */

/*         $users=DB::select('select name, email from users');
        dd($users); */

/*         $users = DB::table('users')->select('name', 'email')->WhereNotNull('email')->orderBy('name')->get();
        dd($users); */

        
        $users = User::all();
        foreach($users as $user)
        {
            echo $user->id . ". " .  $user->name . ' - ' . $user->email . '<br>';
        }
        
    }

    public function create(){
        
        $user = new User();
        $user -> name = "Alice"; 
        $user -> email = "alice@test.com"; 
        $user -> save(); 
    }

    public function update(){
        $user = User::where('email', "john@example.com")->first();
        $user -> email = 'john2@example.com';
        $user -> save();
    }
}
