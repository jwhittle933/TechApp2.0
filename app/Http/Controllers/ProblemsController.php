<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProblemsController extends Controller
{
    public function index()
    {
        if ( $_GET["room"] && $_GET["building"]){
            $room = $_GET["room"];
            $building = $_GET["building"];
        };

        if($building === "Norton"){
            if ($room == 11 || $room == 15 || $room == 17 || $room == 20 || $room == 203 ||
                $room == 207) {
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            } elseif($room == 12 || $room == 16 || $room == 204 || $room == 205){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Extron", "Power", "DVD", "Adapter", "Apple TV"];
            } elseif($room == 13){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            } elseif($room == 101 || $room == 102 || $room == 103 || $room == 104 ||
                    $room == 105 || $room == 201 || $room == 202 || $room == 206 ||
                    $room == 209){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Crestron", "Power", "DVD", "Adapter", "Apple TV", "Smart Board"];
            } elseif($room == 195){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Crestron", "Power", "DVD", "Adapter", "Apple TV", "Smart Board"];
            } elseif($room == 232){
                return $problem = ["", "TV", "Computer","Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            }
        } elseif ($building === "Carver"){
            return $problems = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
        } elseif ($building === "Rankin") {
            if($room == 101){
                return $problems = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            } elseif ($room == 201){
                return $problems = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV", "Smart Board"];
            }
        } elseif($building === "Library"){
            if($room === "Crismon Hall"){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            } elseif($room === "Curriculum Lab"){
                return $problem = ["", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV", "Smart Board"];
            } elseif ($room === "Mullins Room"){
                return $problem = ["", "TV","Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            }
        } elseif ($building === "Cooke"){
            if($room == 8 || $room == 221 || $room == 224){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            } elseif ($room === "CCRH"){
                return $problem =["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV", "Smart Board"];
            } elseif($room === "IRH"){
                return $problem = ["", "Projector", "Computer", "Screen", "Video", "Audio", "Power", "DVD", "Adapter", "Apple TV"];
            }
        }
    }
}
