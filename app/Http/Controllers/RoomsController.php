<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        if ($_GET['building']){
            $building = $_GET["building"];
        }

        if ($building === "Norton"){
            $rooms = ["", 11, 12, 13, 15, 16, 17, 20, 101, 102, 103, 104, 105, 195, 201, 202, 203, 204, 205, 206, 207, 208, 209, 232];
        } elseif ($building === "Carver") {
            $rooms = ["", 108, 135];
        } elseif ($building === "Rankin"){
            $rooms = ["", 101, 201];
        } elseif ($building === "Library"){
            $rooms = ["", "Crismon Hall", "Curriculum Lab", "Mullins Room"];
        } elseif ($building === "Cooke"){
            $rooms = ["", 8, 221, 224, "CCRH", "IRH", "Heeren Hall"];
        }
        return json_encode($rooms);
    }
}
