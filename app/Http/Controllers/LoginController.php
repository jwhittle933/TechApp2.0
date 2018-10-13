<?php

namespace App\Http\Controllers;

use App\User;

class LoginController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('login');
    }
}
