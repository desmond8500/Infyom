<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function getMenu(){
        return json_decode('[
            { "name": "Users", "route": "user.list" }
        ]');
    }

    public function index(){
        return view('1 Backoffice.index');
    }

    public function user_list(){
        $users = User::all();
        return view('1 Backoffice.pages.users.users', compact('users'));
    }
}
