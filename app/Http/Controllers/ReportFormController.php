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
    public function submit(Request $request)
    {
        Requests::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'building' => $request->building,
            'room' => $request->room,
            'problem' => $request->problem,
            'email' => $request->email,
            ]);
            return redirect('/reportform');
    }
}
