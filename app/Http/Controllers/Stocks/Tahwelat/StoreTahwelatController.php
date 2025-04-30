<?php

namespace App\Http\Controllers\Stocks\Tahwelat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Tahwelat\StoreTahwelat;

class StoreTahwelatController extends Controller
{
    /**
     * Display a listing of the tahwelat records.
     */
    public function index()
    {
        $tahwelats = StoreTahwelat::all();
        return view('storetahwelat.index', compact('tahwelats'));
    }
    public function create()
    {
        return view('storetahwelat.create');
    }

    /**
     * Store a newly created tahwelat record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreTahwelat model fields
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $tahwelat = StoreTahwelat::create($validated);
        if ($tahwelat) {
            return redirect()->route('storetahwelat.index')->with('success', 'Tahwelat created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create tahwelat.');
        }
    }

    public function update(Request $request, $id)
    {
        $tahwelat = StoreTahwelat::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreTahwelat model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $tahwelat->update($validated);

        return redirect()->route('storetahwelat.index')->with('success', 'Tahwelat updated successfully.');
    }


    /**
     * Display the specified tahwelat record.
     */
    public function show($id)
    {
        $tahwelat = StoreTahwelat::findOrFail($id);
        return view('storetahwelat.show', compact('tahwelat'));
    }

    /**
     * Update the specified tahwelat record in storage.
     */

    /**
     * Remove the specified tahwelat record from storage.
     */
    public function destroy($id)
    {
        $tahwelat = StoreTahwelat::findOrFail($id);
        $tahwelat->delete();

        return redirect()->route('storetahwelat.index')->with('success', 'Tahwelat deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
