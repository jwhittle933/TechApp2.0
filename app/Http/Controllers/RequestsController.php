<?php

namespace App\Http\Controllers;

use App\Requests;

class RequestsController extends Controller
{
    public function index()
    {
        $requests = Requests::all();
        echo "<div class='flex-requests'>";
        foreach ($requests as $request){
            echo "<pre class='entry'><b>ID: </b>" . $request->id . "<br>";
            echo "<b>First Name: </b>" . $request->first_name . "<br>";
            echo "<b>Last Name: </b>" . $request->last_name . "<br>";
            echo "<b>Building: </b>" . $request->building . "<br>";
            echo "<b>Room: </b>" . $request->room . "<br>";
            echo "<b>Problem: </b>" . $request->problem . "<br>";
            echo "<b>Email: </b>" . $request->email . "<br>";
            echo "<button type='submit' name='delete'>Delete this request</button></pre>";
        }
        echo "</div>";
        return view('requestmanager');
    }

    public function submit()
    {

        $requests = new Requests;
        $requests->first_name = request('first_name');
        $requests->last_name = request('last_name');
        $requests->building = request('building');
        $requests->room = request('room');
        $requests->problem = request('problem');
        $requests->email = request('email');

        $requests->save();

        return redirect('/requestmanager');
    }

    public function show(Requests $request)
    {
        $view = "<pre class='entry'><b>ID: </b>" . $request->id . "<br>";
        $view .= "<b>First Name: </b>" . $request->first_name . "<br>";
        $view .= "<b>Last Name: </b>" . $request->last_name . "<br>";
        $view .= "<b>Building: </b>" . $request->building . "<br>";
        $view .= "<b>Room: </b>" . $request->room . "<br>";
        $view .= "<b>Problem: </b>" . $request->problem . "<br>";
        $view .= "<b>Email: </b>" . $request->email . "<br>";
        $view .= "<button type='submit' name='delete'>Delete this request</button></pre>";
        echo $view;
        return view('requestmanager');
    }
}
