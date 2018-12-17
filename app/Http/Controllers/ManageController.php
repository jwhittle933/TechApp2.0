<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;

class ManageController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('manage', [
            'users' => $users
        ]);
    }
}
