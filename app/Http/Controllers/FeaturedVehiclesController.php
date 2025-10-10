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
        $vehicles = FeaturedVehicle::latest()->get();
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
        'make' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer',
        'mileage' => 'nullable|integer',
        'powertrain' => 'nullable|string',
        'transmission' => 'nullable|string',
        'price' => 'nullable|numeric',
        'location' => 'nullable|string',
        'image' => 'nullable|image',
    ]);

    // Handle boolean fields (checkboxes)
    $validated['featured'] = $request->has('featured');
    $validated['arrival'] = $request->has('arrival');

    // Handle image upload
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('vehicles', 'public');
        $validated['image'] = $path;
    }

    FeaturedVehicle::create($validated);

    return redirect()->route('featuredVehicles.index')
        ->with('success', 'Vehicle added successfully!');
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
