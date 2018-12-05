<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        if($_GET['building'] && $_GET['room'] && $_GET['problem'] && $_GET['suggestion']){
            $building = $_GET['building'];
            $room = $_GET['room'];
            $problem = $_GET['problem'];
            $suggestion = $_GET['suggestion'];
        }

        $suggestion = DB::table('roomtech')
            ->where([
                ['building', $building],
                ['room', $room],
                ['technology', $problem],
                ['suggestion', $suggestion]
            ])->get();

        return $suggestion;
    }
}
