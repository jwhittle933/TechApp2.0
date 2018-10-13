<?php

namespace App\Http\Controllers;

use App\Buildings;

class IndexController extends Controller
{
    public function index()
    {
        $buildings = Buildings::all();
         return view('index');
    }
}
