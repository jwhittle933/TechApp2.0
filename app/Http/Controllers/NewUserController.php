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

    public function add(Request $request)
    {
        $user = $request->session()->get('user');
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $password =  bcrypt($password);
        $authorize = DB::table('users')->where('name', $user)->value('administrator');

        if(!$request->administrator == null){
            $adminstrator = $request->administrator;
        } else {
            $adminstrator = 'False';
        }

        if(($name && $email && $password) && $authorize === "True"){
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'administrator' => $adminstrator
            ]);
            DB::table('access_requests')->where('email', $email)->delete();
        } elseif ($authorize === "False"){
            $error = "You are not authorized to create a new user";
            return redirect('newuser')->with('error', $error);
        } else {
            $error = "It looks like you forgot to fill something out.";
            return redirect('newuser')->with('error', $error);
        }

        return redirect('newuser')->with('success', 'success');
    }

    public function delete(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $accessid = $request->accessid;

        DB::table('access_requests')->where('id', $accessid)->delete();

        return redirect('newuser');
    }
}
