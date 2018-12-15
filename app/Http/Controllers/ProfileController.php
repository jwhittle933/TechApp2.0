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

        $currentUser = DB::table('users')->where('name', $value)->get();

        return view('profile')->with('currentUser', $currentUser[0]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);
        $streetaddress = $request->streetaddress;
        $city = $request->city;
        $state = $request->state;

        if($id && $name &&
            $email && $password &&
            $streetaddress && $city && $state){
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'streetaddress' => $streetaddress,
                    'city' => $city,
                    'state' => $state
                ]);
                return redirect('profile');
        }
    }
}
