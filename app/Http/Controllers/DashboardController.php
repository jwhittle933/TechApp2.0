<?php

namespace App\Http\Controllers;

use App\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $value = session('user');
        if (!$value) return redirect('/login');
        $requests = Requests::all();
        return view('dashboard', [
            'requests' => $requests,
        ]);
    }

    public function store(Request $request)
    {
        $logout = $request->input('logout');
        if ($logout){
            $request->session()->forget('user');
            return redirect('login');
        };
        $store = true;
        $this->validate(request(), [
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'building' => 'required',
            'room' => 'required',
            'problem' => 'required|min:10',
            'email' => 'required|e-mail',
        ]);
        Requests::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'building' => request('building'),
            'room' => request('room'),
            'problem' => request('problem'),
            'email' => request('email'),
        ]);
        if ($request->path() === "reportform"){
            return redirect('/reportform')->with('store', $store);
        } else {
            return redirect('/dashboard')->with('store', $store);
        }
    }

    public function show(Requests $request)
    {
        return view('/show', [
            'id' => $request->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'building' => $request->building,
            'room' => $request->room,
            'problem' => $request->problem,
            'email' => $request->email,
            'created_at' => $request->created_at->diffForHumans(),
            'updated_at' => $request->updated_at->diffForHumans(),
        ]);
    }

    public function destroy($id)
    {
        $destroy = true;
        Requests::where('id', $id)->delete();
        return redirect('/dashboard')->with('destroy', $destroy);
    }

    public function update($id)
    {
        $update = true;
        $timeOfUpdate = Carbon::now();
        Requests::where('id', request('id'))
        ->update(['first_name' => request('first_name'),
                    'last_name' => request('last_name'),
                    'building' => request('building'),
                    'room' => request('room'),
                    'problem' => request('problem'),
                    'email' => request('email'),
                    'updated_at' => $timeOfUpdate
                ]);
        return redirect("/dashboard")->with('update', $update);
        }
}
