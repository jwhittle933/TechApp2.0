<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    public function login()
    {
        $this->validate(request(), [
            'username' => 'required|e-mail',
            'password' => 'required|min:2'
        ]);
        $loginUser = request('username');
        $loginPassword = request('password');

        $users = Users::all();
        if (($loginUser === $users[0]->email && Hash::check($loginPassword, $users[0]->password)) || ($loginUser === $users[1]->email && Hash::check($loginPassword, $users[1]->password))){
            return redirect('/requestmanager');
        } else {
            return view('/login');
        }
    }
}
