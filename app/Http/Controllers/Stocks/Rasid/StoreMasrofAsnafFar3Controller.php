<?php

namespace App\Http\Controllers\Stocks\Rasid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Rasid\StoreMasrofAsnafFar3;

class StoreMasrofAsnafFar3Controller extends Controller
{
    /**
     * Display a listing of the masrof asnaf far3 records.
     */
    public function index()
    {
        $masrofasnaf = StoreMasrofAsnafFar3::all();
        return view('storemasrofasnaffar3.index', compact('masrofasnaf'));
    }

    /**
     * Show the form for creating a new masrof asnaf far3 record.
     */
    public function create()
    {
        return view('storemasrofasnaffar3.create');
    }


    /**
     * Store a newly created masrof asnaf far3 record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreMasrofAsnafFar3 model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $record = StoreMasrofAsnafFar3::create($validated);
        if ($record) {
            $record->save();
        } else {
            return redirect()->back()->with('error', 'Failed to create masrof asnaf far3.');
        }

        return redirect()->route('storemasrofasnaffar3.index')->with('success', 'Masrof asnaf far3 created successfully.');
    }

    /**
     * Display the specified masrof asnaf far3 record.
     */
    public function show($id)
    {
        $record = StoreMasrofAsnafFar3::findOrFail($id);
        return view('storemasrofasnaffar3.show', compact('record'));
    }

    /**
     * Update the specified masrof asnaf far3 record in storage.
     */
    public function update(Request $request, $id)
    {
        $record = StoreMasrofAsnafFar3::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreMasrofAsnafFar3 model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $record->update($validated);
        if ($record) {
            $record->save();
        } else {
            return redirect()->back()->with('error', 'Failed to update masrof asnaf far3.');
        }

        return redirect()->route('storemasrofasnaffar3.index')->with('success', 'Masrof asnaf far3 updated successfully.');
    }

    /**
     * Remove the specified masrof asnaf far3 record from storage.
     */
    public function destroy($id)
    {
        $record = StoreMasrofAsnafFar3::findOrFail($id);
        $record->delete();

        return redirect()->route('storemasrofasnaffar3.index')->with('success', 'Masrof asnaf far3 deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
