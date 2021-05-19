<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index () {

        $users = User::all();

        return view('index',)->with('users', $users);
    }

    public function print($id)
    {
        $user = User::find($id);

        return view('print')->with('user', $user);
    }
}
