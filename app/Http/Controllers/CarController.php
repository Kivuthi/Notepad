<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->get();
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "make"=> "required|string",
            "model"=> "required|string",
            "year"=> "required|integer",
            'engine' => 'required|string',
            'description' => 'required|string',
            'availability' => 'nullable|string',
            'drive' => 'nullable|string',
            'mileage' => 'nullable|integer',
            'powertrain' => 'nullable|string',
            'transmission' => 'nullable|string',
            'price' => 'nullable|numeric',
            'location' => 'nullable|string',
            'company' => 'nullable|string',
            'images.' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) 
            {
            $path = $image->store('cars', 'public');
            $images[] = $path;
            }

        }

        $validated['images'] = json_encode($images);

        Car::create($validate);    

        return redirect()->route('cars.index')->with('success','Vehicles added succecessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
