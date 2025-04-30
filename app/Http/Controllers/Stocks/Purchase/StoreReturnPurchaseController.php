<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StoreReturnPurchase;

class StoreReturnPurchaseController extends StocksBaseController
{
    protected $routeName = 'storereturnpurchase';

    /**
     * Display a listing of the return purchase records.
     */
    public function index()
    {
        $returns = StoreReturnPurchase::all();
        return view('storereturnpurchase.index', compact('returns'));
    }

    public function create()
    {
        return view('storereturnpurchase.create');
    }

    /**
     * Store a newly created return purchase record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreReturnPurchase model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $return = StoreReturnPurchase::create($validated);
        $return->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchase created successfully.');
    }

    /**
     * Display the specified return purchase record.
     */
    public function show($id)
    {
        $return = StoreReturnPurchase::findOrFail($id);
        return view('storereturnpurchase.show', compact('return'));
    }

    /**
     * Update the specified return purchase record in storage.
     */
    public function update(Request $request, $id)
    {
        $return = StoreReturnPurchase::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreReturnPurchase model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $return->update($validated);
        $return->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchase updated successfully.');
    }

    /**
     * Remove the specified return purchase record from storage.
     */
    public function destroy($id)
    {
        $return = StoreReturnPurchase::findOrFail($id);
        $return->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchase deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
