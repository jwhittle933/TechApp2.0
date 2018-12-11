<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $value = session('user');
        if (!$value) return redirect('login');
        return view('profile');
    }
}
