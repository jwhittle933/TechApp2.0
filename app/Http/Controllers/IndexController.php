<?php

namespace App\Http\Controllers;

use App\Buildings;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
