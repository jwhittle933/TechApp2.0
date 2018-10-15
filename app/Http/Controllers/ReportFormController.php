<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;

class ReportFormController extends Controller
{
    public function index()
    {
        return view('reportform');
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
        return redirect('/reportform');
    }
}
