<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportFormController extends Controller
{
    public function index()
    {
        return view('reportform');
    }
}
