<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SolutionController extends Controller
{
    public function index()
    {
        if($_GET['building'] && $_GET['room'] && $_GET['problem'] && $_GET['suggestion']){
            $building = $_GET['building'];
            $room = $_GET['room'];
            $problem = $_GET['problem'];
            $suggestion = $_GET['suggestion'];
        } elseif (!$_GET['building'] || !$_GET['room'] || !$_GET['problem']){
            return ["Error. Data incomplete"];
        }

        $data = DB::table('roomtech')
            ->where([
                ['building', $building],
                ['room', $room],
                ['technology', $problem]
            ])->get();

        return $data;
    }
}
