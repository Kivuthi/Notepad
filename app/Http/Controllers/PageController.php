<?php

namespace App\Http\Controllers;
// use App\Models\FeaturedVehicle;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        return view("dashboard");
    }

    public function home() {
        $Vehicles = \App\Models\FeaturedVehicle::all();
        return view("pages.index", compact("Vehicles"));
    }

    public function about() {
        return view("pages.about");
    }

    public function contact() {
        return view("pages.contact");
    }

    public function sellcar() {
        return view("pages.sellcar");
    }

    public function import() {
        return view("pages.import");
    }
}
