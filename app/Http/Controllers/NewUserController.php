<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $name = request('name');
        $email = request('email');
        $password = request('password');

        if(!request('administrator') === 'null'){
            $adminstrator = request('administrator');
        } else {
            $adminstrator = 'False';
        }

        if($name && $email && $password){
            return;
        }
        return redirect('newuser');
    }
}
