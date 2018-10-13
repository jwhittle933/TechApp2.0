<?php

namespace App\Http\Controllers;

use App\RequestManager;

class RequestManagerController extends Controller
{
    public function index()
    {
        //$requests = RequestManager::all();
        return view('requestmanager');
    }
}
