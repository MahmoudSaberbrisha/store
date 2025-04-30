<?php

namespace App\Http\Controllers\Stocks\Tahwelat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Tahwelat\StoreTahwelatAsnaf;

class StoreTahwelatAsnafController extends Controller
{
    /**
     * Display a listing of the tahwelat asnaf records.
     */
    public function index()
    {
        $asnafs = StoreTahwelatAsnaf::all();
        return view('storetahwelatasnaf.index', compact('asnafs'));
    }
    public function create()
    {
        return view('storetahwelatasnaf.create');
    }

    /**
     * Store a newly created tahwelat asnaf record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreTahwelatAsnaf model fields
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $asnaf = StoreTahwelatAsnaf::create($validated);
        if ($asnaf) {
            return redirect()->route('storetahwelatasnaf.index')->with('success', 'Tahwelat asnaf created successfully.');
            $asnaf->save();
        } else {
            return redirect()->back()->with('error', 'Failed to create tahwelat asnaf.');
        }
    }

    /**
     * Display the specified tahwelat asnaf record.
     */
    public function show($id)
    {
        $asnaf = StoreTahwelatAsnaf::findOrFail($id);
        return view('storetahwelatasnaf.show', compact('asnaf'));
    }

    /**
     * Update the specified tahwelat asnaf record in storage.
     */
    public function update(Request $request, $id)
    {
        $asnaf = StoreTahwelatAsnaf::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreTahwelatAsnaf model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $asnaf->update($validated);
        if ($asnaf) {
            return redirect()->route('storetahwelatasnaf.index')->with('success', 'Tahwelat asnaf updated successfully.');
            $asnaf->save();
        } else {
            return redirect()->back()->with('error', 'Failed to update tahwelat asnaf.');
        }
    }

    /**
     * Remove the specified tahwelat asnaf record from storage.
     */
    public function destroy($id)
    {
        $asnaf = StoreTahwelatAsnaf::findOrFail($id);
        $asnaf->delete();

        return redirect()->route('storetahwelatasnaf.index')->with('success', 'Tahwelat asnaf deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
