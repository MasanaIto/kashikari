<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->sortByDesc('created_at');

        return view('users.index')->with('users', $users);
    }
}
