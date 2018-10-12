<?php

namespace App\Http\Controllers;

use App\Buildings;

class IndexController extends Controller
{
    public function index()
    {
        $norton_rooms = Buildings::all();
         return view('index');
    }
}
