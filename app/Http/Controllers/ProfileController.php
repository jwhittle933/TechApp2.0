<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $value = session('user');
        if (!$value) return redirect('login');

        $currentUser = DB::table('users')->where('name', "Jonathan Whittle")->get();
        // dd($currentUser);

        return view('profile')->with('currentUser', $currentUser[0]);
    }
}
