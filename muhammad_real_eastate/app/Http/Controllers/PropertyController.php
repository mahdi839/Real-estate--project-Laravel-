<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   
   public function index()
    {
        
        $properties = Property::all();
       
        return view('dashboard.properties.index', compact('properties'));
    }

    public function create()
    {
        return view('dashboard.properties.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'price' => 'required|numeric',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'sqrfit' => 'required|integer',
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('properties', 'public');
        }

        Property::create($validated);

        return redirect()->route('dashboard.properties.index')->with('success', 'Property added successfully.');
    }

    public function edit(Property $property)
    {
        return view('dashboard.properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $validated = $request->validate([
            'price' => 'required|numeric',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'sqrfit' => 'required|integer',
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('properties', 'public');
        }

        $property->update($validated);

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Property deleted successfully.');
    }
}
