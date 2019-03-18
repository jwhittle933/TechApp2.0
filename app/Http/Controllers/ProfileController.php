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

        /**
         * @param value uses the logged in user's name from the session
         * to find their row in the db. If the user updates
         * their name in the db, the search will not be able
         * to find them. Session value should be updated to include
         * user's id.
         */
        $currentUser = DB::table('users')->where('name', $value)->first();

        return view('profile')->with('currentUser', $currentUser);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);
        $prphone = $request->prphone;
        $secphone = $request->secphone;
        $streetaddress = $request->streetaddress;
        $city = $request->city;
        $state = $request->state;

        if($id && $name &&
            $email && $password &&
            $prphone && $secphone &&
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
