<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout(Request $request) {
        $value = $request->session()->get('user');
        if($value){
             $request->session()->forget('user');
             return redirect('login');
        }
    }
}
