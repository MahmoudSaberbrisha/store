<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StorePurchasesOthers;

class StorePurchasesOthersController extends StocksBaseController
{
    protected $routeName = 'storepurchasesothers';

    /**
     * Display a listing of the purchases others records.
     */
    public function index()
    {
        $purchases = StorePurchasesOthers::all();
        return view('storepurchasesothers.index', compact('purchases'));
    }

    public function create()
    {
        return view('storepurchasesothers.create');
    }

    /**
     * Store a newly created purchases others record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StorePurchasesOthers model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $purchase = StorePurchasesOthers::create($validated);
        $purchase->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases others created successfully.');
    }

    /**
     * Display the specified purchases others record.
     */
    public function show($id)
    {
        $purchase = StorePurchasesOthers::findOrFail($id);
        return view('storepurchasesothers.show', compact('purchase'));
    }

    /**
     * Update the specified purchases others record in storage.
     */
    public function update(Request $request, $id)
    {
        $purchase = StorePurchasesOthers::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StorePurchasesOthers model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $purchase->update($validated);
        $purchase->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases others updated successfully.');
    }

    /**
     * Remove the specified purchases others record from storage.
     */
    public function destroy($id)
    {
        $purchase = StorePurchasesOthers::findOrFail($id);
        $purchase->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases others deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
