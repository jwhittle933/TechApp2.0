<?php

namespace App\Http\Controllers;

use App\Requests;

class RequestsController extends Controller
{
    public function index()
    {
        $requests = Requests::all();
        return view('requestmanager', [
            'requests' => $requests,
        ]);
    }

    public function store()
    {
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
        return redirect('/requestmanager')->with('first_name', request('first_name'));
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
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);
    }

    public function destroy($id)
    {
        Requests::where('id', $id)->delete();
        return redirect('/requestmanager');
    }

    public function edit(Requests $request)
    {
        return view('edit', []);
    }

    public function update ($id)
    {
        Requests::where('id', '=', $id)
            ->update(['first_name' => ''])
            ->update(['last_name' => ''])
            ->update(['building' => ''])
            ->update(['room' => ''])
            ->update(['problem' => ''])
            ->update(['email' => '']);
        return redirect('/requestmanager');
    }
}
