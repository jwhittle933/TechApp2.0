<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $this->validate(request(), [
            'username' => 'required|e-mail',
            'password' => 'required|min:2'
        ]);

        $loginUser = request('username');
        $loginPassword = request('password');

        $users = Users::all();
        if (($loginUser === $users[0]->email && Hash::check($loginPassword, $users[0]->password))
        || ($loginUser === $users[1]->email && Hash::check($loginPassword, $users[1]->password))){
            $user = Users::where('email', $loginUser)->value('name');
            $request->session()->put('user', $user);
            return redirect('/dashboard');
        } else {
            $error = true;
            return redirect('/login')->with('error', $error);
        }
    }

    public function access()
    {
        $this->validate(request(), [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'email' => 'required|e-mail'
        ]);
        $first = request('firstname');
        $last = request('lastname');
        $email = request('email');

        //Either keep DB facade or create Access model
        DB::table('access_requests')->insert(
            ['firstname' => $first,
            'lastname' => $last,
            'email' => $email]
        );

        return view('access');
    }
}
