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

        $user = Users::where('email', $loginUser)->get(); //could also use ->first() instead of ->get()

        if ($user->isEmpty()){
            $error = "Invalid username";
            return redirect('/login')->with('error', $error);
        } elseif (Hash::check($loginPassword, $user[0]->password)){
            $request->session()->put('user', $user[0]->name);
            return redirect('/dashboard');
        } else {
            $error = "Invalid password";
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

        //Either keep DB facade or create Eloquent model
        DB::table('access_requests')->insert(
            ['firstname' => $first,
            'lastname' => $last,
            'email' => $email]
        );

        return view('access');
    }
}
