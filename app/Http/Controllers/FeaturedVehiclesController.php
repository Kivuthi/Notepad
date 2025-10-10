<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVehicle;
use Illuminate\Http\Request;

class FeaturedVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = featuredVehicle::latest()->get();
        return view("featuredVehicles.index" , compact("vehicles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("featuredVehicles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "image"=> "required",
            "arrival"=> "nullable",
            "price"=> "required",
            "make"=> "required",
            "year"=> "required",
            "mileage"=> "required",
            "powertrain"=> "required",
            "transmission"=> "required",
            "location"=> "required",
            "company"=> "required",
            "rating"=> "required"
        ]) ;

        FeaturedVehicle::create($validated);
        return redirect()->route("featuredVehicles.index")->with("success","Featured Vehicles Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(FeaturedVehicle $featuredVehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeaturedVehicle $featuredVehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FeaturedVehicle $featuredVehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeaturedVehicle $featuredVehicle)
    {
        //
    }
}
