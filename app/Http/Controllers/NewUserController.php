<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function index()
    {
        return view('newuser');
    }
}
