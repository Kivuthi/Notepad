<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class InsightsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insights = Insight::latest()->get();
        return view("insights.index", compact("insights"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("insights.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title"=> "required|string",
            "body"=> "required|string",
            "author"=> "required|string|max:255",
            "image"=> "nullable|image",
        ]);

        if ($request->hasFile("image")) {
            $path = $request->file('image')->store('insights', 'public');
            $validated["image"] = $path;
        }

        Insight::create($validated);

    return redirect()->route('insights.index')
        ->with('success', 'Vehicle added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Insight $insight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Insight $insight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insight $insight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insight $insight)
    {
        //
    }
}
