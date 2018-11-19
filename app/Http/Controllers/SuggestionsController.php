<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
    public function index()
    {
        if($_GET['building'] && $_GET['room'] && $_GET['problem']){
            $building = $_GET['building'];
            $room = $_GET['room'];
            $problem = $_GET['problem'];
        } elseif (!$_GET['building'] || !$_GET['room'] || !$_GET['problem']){
            return ["Error. Data incomplete"];
        }
        $projector = ["Is the light green?", "Is there a blue screen?", "Is the projector on?", "Have you pressed 'Source-Search'", "Plugged in?"];
        $tv = ["Is it powered on?", "Is it on the correct input?", "Is your device plugged in?", "Is the TV plugged in?", "Remote batteries dead?"];
        $computer = ["Is it a seminary issued laptop?", "Is it powered on?", "Can't connect to the internet?", "Is it the house pc?", "Software update?"];
        $screen = ["Is your computer plugged in?", "Is the screen blue?"];
        $audio = ["Is the cable plugged in?", "Is your computer muted?", "Is the Crestron muted?"];
        $video = ["Is the projector on?", "Are you plugged in?"];
        $extron = ["Is the screen responsive?", "Are you on the correct input?", "Have you checked the 'Room Options' button?"];
        $crestron = ["Is the screen responsive?", "Have you selected the correct input?", "Is the screen blue?"];
	    $power = ["Are the desks connected?"];
	    $dvd = ["Are you using a BluRay Player?", "Are you using your computer?"];
        $adapter = ["Does your computer plug straight in?"];
        $appleTV = ["Is it on but won't connect?", "Not detecting the device?"];
        $smartBoard = ["Have you powered it on?", "Is the USB plugged in?", "Is the HDMI plugged in?", "Have you connected via the mobile app?"];

        if($problem === "Projector"){
            return $projector;
        } elseif($problem === "Computer"){
            return $computer;
        } elseif($problem === "Screen"){
            return $screen;
        } elseif($problem === "Audio"){
            return $audio;
        } elseif($problem === "Video"){
            return $video;
        } elseif($problem === "Extron"){
            return $extron;
        } elseif($problem === "Crestron"){
            return $crestron;
        } elseif($problem === "Power"){
            return $power;
        } elseif($problem === "DVD"){
            return $dvd;
        } elseif($problem === "Adapter"){
            return $adapter;
        } elseif($problem === "Apple TV"){
            return $appleTV;
        } elseif($problem === "Smart Board"){
            return $smartBoard;
        }
    }
}
