<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * GET request to /userprofile
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'This is /api/update';
    }

    /**
     * Show the form for creating a new resource.
     *
     * GET request to /userprofile/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * POST request to /userprofile
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * GET request to /userprofile/{user}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * GET request to userprofile/{user}/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * PUT/PATCH request to /userprofile/{user}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userId = $id;
        $columnName =  $request->columnName;
        $columnValue = $request->columnValue;

        // return "$userId, $columnName, $columnValue";
        try {
            DB::table('users')
                    ->where('id', $userId)
                    ->update([$columnName => $columnValue]);
        } catch (QueryException $e) {
            //create error log
            return $e;
        }
        $message = "Success! $columnName successfully changed to $columnValue";
        return response($message, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * DELETE request to /userprofile/{user}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
