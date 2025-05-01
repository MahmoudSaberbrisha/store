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
            'rkm' => 'required|integer',
            'order_date' => 'required|date',
            'order_date_ar' => 'nullable|string|max:255',
            'order_time' => 'nullable|string|max:50',
            'from_storage' => 'required|integer|exists:store_other_storage,id',
            'to_storage' => 'required|integer|exists:store_other_storage,id',
            'reason' => 'nullable|string|max:255',
            'publisher' => 'required|integer',
            'publisher_name' => 'nullable|string|max:255',
            'from_storage_n' => 'nullable|string|max:255',
            'to_storage_n' => 'nullable|string|max:255',
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
            'rkm' => 'sometimes|required|integer',
            'order_date' => 'sometimes|required|date',
            'order_date_ar' => 'sometimes|nullable|string|max:255',
            'order_time' => 'sometimes|nullable|string|max:50',
            'from_storage' => 'sometimes|required|integer|exists:store_other_storage,id',
            'to_storage' => 'sometimes|required|integer|exists:store_other_storage,id',
            'reason' => 'sometimes|nullable|string|max:255',
            'publisher' => 'sometimes|required|integer',
            'publisher_name' => 'sometimes|nullable|string|max:255',
            'from_storage_n' => 'sometimes|nullable|string|max:255',
            'to_storage_n' => 'sometimes|nullable|string|max:255',
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
