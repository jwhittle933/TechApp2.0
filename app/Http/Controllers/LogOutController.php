<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout(Request $request) {
        $session =  session('user');
        $request->session()->forget('user');
        return redirect('/login');
    }
}
