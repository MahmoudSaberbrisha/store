<?php

namespace App\Http\Controllers\Stocks\Rasid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Rasid\StoreRasidAyniBar;

class StoreRasidAyniBarController extends Controller
{
    /**
     * Display a listing of the rasid ayni bar records.
     */
    public function index()
    {
        $records = StoreRasidAyniBar::all();
        return view('storerasidaynibar.index', compact('records'));
    }

    public function create()
    {
        return view('storerasidaynibar.create');
    }
    /**
     * Store a newly created rasid ayni bar record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreRasidAyniBar model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $record = StoreRasidAyniBar::create($validated);
        if ($record) {
            $record->save();
        } else {
            return redirect()->back()->with('error', 'Failed to create rasid ayni bar.');
        }

        return redirect()->route('storerasidaynibar.index')->with('success', 'Rasid ayni bar created successfully.');
    }

    /**
     * Display the specified rasid ayni bar record.
     */
    public function show($id)
    {
        $record = StoreRasidAyniBar::findOrFail($id);
        return view('storerasidaynibar.show', compact('record'));
    }

    /**
     * Update the specified rasid ayni bar record in storage.
     */
    public function update(Request $request, $id)
    {
        $record = StoreRasidAyniBar::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreRasidAyniBar model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $record->update($validated);
        if ($record) {
            $record->save();
        } else {
            return redirect()->back()->with('error', 'Failed to update rasid ayni bar.');
        }

        return redirect()->route('storerasidaynibar.index')->with('success', 'Rasid ayni bar updated successfully.');
    }

    /**
     * Remove the specified rasid ayni bar record from storage.
     */
    public function destroy($id)
    {
        $record = StoreRasidAyniBar::findOrFail($id);
        $record->delete();

        return redirect()->route('storerasidaynibar.index')->with('success', 'Rasid ayni bar deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
