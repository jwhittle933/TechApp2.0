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
            echo "<div class='entry'><b>ID: </b>" . $request->id . "<br>";
            echo "<b>First Name: </b>" . $request->first_name . "<br>";
            echo "<b>Last Name: </b>" . $request->last_name . "<br>";
            echo "<b>Building: </b>" . $request->building . "<br>";
            echo "<b>Room: </b>" . $request->room . "<br>";
            echo "<b>Problem: </b>" . $request->problem . "<br>";
            echo "<b>Email: </b>" . $request->email . "<br>";
            echo "<b>Created At: </b>" . $request->created_at . "<br>";
            echo "<b>Updated At: </b>" . $request->updated_at . "<br>";
            echo "</div>";
        }
        echo "</div>";
    }

    public function store()
    {
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
        $view = "<div class='entry'><b>ID: </b>" . $request->id . "<br>";
        $view .= "<b>First Name: </b>" . $request->first_name . "<br>";
        $view .= "<b>Last Name: </b>" . $request->last_name . "<br>";
        $view .= "<b>Building: </b>" . $request->building . "<br>";
        $view .= "<b>Room: </b>" . $request->room . "<br>";
        $view .= "<b>Problem: </b>" . $request->problem . "<br>";
        $view .= "<b>Email: </b>" . $request->email . "<br>";
        $view .= "<b>Created At: </b>" . $request->created_at . "<br>";
        $view .= "<b>Updated At: </b>" . $request->updated_at . "<br>";
        $view .= "</div>";
        echo $view;
        return view('/show', [
            'id' => $request->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'building' => $request->building,
            'room' => $request->room,
            'problem' => $request->problem,
            'email' => $request->email,
        ]);
    }

    public function destroy($id)
    {
        Requests::where('id', $id)->delete();
        return redirect('/requestmanager');
    }

    public function update (Requests $request)
    {
        Requests::where('id', '=', $id)->update('', '');
        return redirect('/requestmanager');
    }
}
