<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $norton_rooms = DB::table('norton_rooms')->get();
        return view('login');
    }
}
