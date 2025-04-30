<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StoreHadbackPurchase;

class StoreHadbackPurchaseController extends StocksBaseController
{
    protected $routeName = 'storehadbackpurchase';

    /**
     * Display a listing of the hadback purchase records.
     */
    public function index()
    {
        $hadbacks = StoreHadbackPurchase::all();
        return view('storehadbackpurchase.index', compact('hadbacks'));
    }

    public function create()
    {
        return view('storehadbackpurchase.create');
    }

    /**
     * Store a newly created hadback purchase record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreHadbackPurchase model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $hadback = StoreHadbackPurchase::create($validated);
        $hadback->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Hadback purchase created successfully.');
    }

    /**
     * Display the specified hadback purchase record.
     */
    public function show($id)
    {
        $hadback = StoreHadbackPurchase::findOrFail($id);
        return view('storehadbackpurchase.show', compact('hadback'));
    }

    /**
     * Update the specified hadback purchase record in storage.
     */
    public function update(Request $request, $id)
    {
        $hadback = StoreHadbackPurchase::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreHadbackPurchase model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $hadback->update($validated);
        $hadback->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Hadback purchase updated successfully.');
    }

    /**
     * Remove the specified hadback purchase record from storage.
     */
    public function destroy($id)
    {
        $hadback = StoreHadbackPurchase::findOrFail($id);
        $hadback->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Hadback purchase deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
