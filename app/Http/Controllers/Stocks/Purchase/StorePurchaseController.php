<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StorePurchase;

class StorePurchaseController extends StocksBaseController
{
    protected $routeName = 'storepurchase';

    /**
     * Display a listing of the purchase records.
     */
    public function index()
    {
        $purchases = StorePurchase::all();
        return view('storepurchase.index', compact('purchases'));
    }
    public function create()
    {
        return view('storepurchase.create');
    }

    /**
     * Store a newly created purchase record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StorePurchase model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $purchase = StorePurchase::create($validated);
        $purchase->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Purchase created successfully.');
    }

    /**
     * Display the specified purchase record.
     */
    public function show($id)
    {
        $purchase = StorePurchase::findOrFail($id);
        return view('storepurchase.show', compact('purchase'));
    }

    /**
     * Update the specified purchase record in storage.
     */
    public function update(Request $request, $id)
    {
        $purchase = StorePurchase::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StorePurchase model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $purchase->update($validated);
        $purchase->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchase updated successfully.');
    }

    /**
     * Remove the specified purchase record from storage.
     */
    public function destroy($id)
    {
        $purchase = StorePurchase::findOrFail($id);
        $purchase->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchase deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
