<?php

namespace App\Http\Controllers\Stocks\Other;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Other\StoreOtherSupplier;

class StoreOtherSupplierController extends StocksBaseController
{
    protected $routeName = 'storeothersupplier';

    /**
     * Display a listing of the other suppliers.
     */
    public function index()
    {
        $suppliers = StoreOtherSupplier::all();
        return view('storeothersupplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('storeothersupplier.create');
    }

    /**
     * Store a newly created other supplier in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreOtherSupplier model fields
            // Placeholder example:
            'name' => 'required|string|max:100',
            'contact' => 'nullable|string|max:100',
            // Add other fields as per model
        ]);

        $supplier = StoreOtherSupplier::create($validated);
        $supplier->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Supplier created successfully.');
    }

    /**
     * Display the specified other supplier.
     */
    public function show($id)
    {
        $supplier = StoreOtherSupplier::findOrFail($id);
        return view('storeothersupplier.show', compact('supplier'));
    }

    /**
     * Update the specified other supplier in storage.
     */
    public function update(Request $request, $id)
    {
        $supplier = StoreOtherSupplier::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreOtherSupplier model fields
            'name' => 'sometimes|required|string|max:100',
            'contact' => 'nullable|string|max:100',
            // Add other fields as per model
        ]);

        $supplier->update($validated);
        $supplier->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Supplier updated successfully.');
    }

    /**
     * Remove the specified other supplier from storage.
     */
    public function destroy($id)
    {
        $supplier = StoreOtherSupplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Supplier deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
