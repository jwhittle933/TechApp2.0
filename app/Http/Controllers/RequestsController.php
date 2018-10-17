<?php

namespace App\Http\Controllers;

use App\Requests;

class RequestsController extends Controller
{
    public function index()
    {
        $requests = Requests::all();
        echo view('requestmanager');
        echo "<div class='flex-requests'>";
        foreach ($requests as $request){
            echo "<div class='entry' id='$request->id'><a href='/requestmanager/$request->id'><b>ID: </b>" . $request->id . "<br>";
            echo "<b>First Name: </b>" . $request->first_name . "<br>";
            echo "<b>Last Name: </b>" . $request->last_name . "<br>";
            echo "<b>Building: </b>" . $request->building . "<br>";
            echo "<b>Room: </b>" . $request->room . "<br>";
            echo "<b>Problem: </b>" . $request->problem . "<br>";
            echo "<b>Email: </b>" . $request->email . "<br>";
            echo "<b>Created At: </b>" . $request->created_at . "<br>";
            echo "<b>Updated At: </b>" . $request->updated_at . "<br>";
            echo "</a></div>";
        }
        echo "</div>";
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
        return redirect('/requestmanager');
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
