<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewUserController extends Controller
{
    public function index()
    {
        $value = session('user');
        if (!$value) return redirect('login');

        $newUsers = DB::table('access_requests')->get();
        return view('newuser')->with('newusers', $newUsers);
    }

    public function add()
    {
        return redirect('newuser');
    }
}
