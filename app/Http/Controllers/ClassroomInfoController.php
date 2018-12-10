<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomInfoController extends Controller
{
    public function index()
    {
        return view('classroominfo');
    }
}
