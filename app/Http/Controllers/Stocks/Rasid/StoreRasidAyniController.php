<?php

namespace App\Http\Controllers\Stocks\Rasid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Rasid\StoreRasidAyni;

class StoreRasidAyniController extends Controller
{
    /**
     * Display a listing of the rasid ayni records.
     */
    public function index()
    {
        $rasidayni = StoreRasidAyni::all();
        return view('storerasidayni.index', compact('rasidayni'));
    }

    public function create()
    {
        return view('storerasidayni.create');
    }

    /**
     * Store a newly created rasid ayni record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreRasidAyni model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $record = StoreRasidAyni::create($validated);
        if ($record) {
            $record->save();
        } else {
            return redirect()->back()->with('error', 'Failed to create rasid ayni.');
        }

        return redirect()->route('storerasidayni.index')->with('success', 'Rasid ayni created successfully.');
    }

    /**
     * Display the specified rasid ayni record.
     */
    public function show($id)
    {
        $record = StoreRasidAyni::findOrFail($id);
        return view('storerasidayni.show', compact('record'));
    }

    /**
     * Update the specified rasid ayni record in storage.
     */
    public function update(Request $request, $id)
    {
        $record = StoreRasidAyni::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreRasidAyni model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $record->update($validated);
        if ($record) {
            $record->save();
        } else {
            return redirect()->back()->with('error', 'Failed to update rasid ayni.');
        }

        return redirect()->route('storerasidayni.index')->with('success', 'Rasid ayni updated successfully.');
    }

    /**
     * Remove the specified rasid ayni record from storage.
     */
    public function destroy($id)
    {
        $record = StoreRasidAyni::findOrFail($id);
        $record->delete();

        return redirect()->route('storerasidayni.index')->with('success', 'Rasid ayni deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
