<?php

namespace App\Http\Controllers;

use App\Requests;
use Carbon\Carbon;

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
        return redirect('/requestmanager')->with('store', $store);
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
            'created_at' => $request->created_at->toDayDateTimeString(),
            'updated_at' => $request->updated_at->toDayDateTimeString(),
        ]);
    }

    public function destroy($id)
    {
        $destroy = true;
        Requests::where('id', $id)->delete();
        return redirect('/requestmanager')->with('destroy', $destroy);
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
      return redirect("/requestmanager")->with('update', $update);
    }
}
