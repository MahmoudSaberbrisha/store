<?php

namespace App\Http\Controllers\Stocks\Other;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Other\StoreSupplierVouchersOther;

class StoreSupplierVouchersOtherController extends StocksBaseController
{
    protected $routeName = 'storesuppliervouchersother';

    /**
     * Display a listing of the supplier vouchers.
     */
    public function index()
    {
        $vouchers = StoreSupplierVouchersOther::all();
        return view('storesuppliervouchersother.index', compact('vouchers'));
    }

    public function create()
    {
        return view('storesuppliervouchersother.create');
    }

    /**
     * Store a newly created supplier voucher in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'field1' => 'required|string',
            'field2' => 'nullable|integer',
        ]);

        $voucher = StoreSupplierVouchersOther::create($validated);
        $voucher->save();
        return redirect()->route($this->routeName . '.index')->with('success', 'Supplier voucher created successfully.');
    }

    /**
     * Display the specified supplier voucher.
     */
    public function show($id)
    {
        $voucher = StoreSupplierVouchersOther::findOrFail($id);
        return view('storesuppliervouchersother.show', compact('voucher'));
    }

    /**
     * Update the specified supplier voucher in storage.
     */
    public function update(Request $request, $id)
    {
        $voucher = StoreSupplierVouchersOther::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreSupplierVouchersOther model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $voucher->update($validated);
        $voucher->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Supplier voucher updated successfully.');
    }

    /**
     * Remove the specified supplier voucher from storage.
     */
    public function destroy($id)
    {
        $voucher = StoreSupplierVouchersOther::findOrFail($id);
        $voucher->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Supplier voucher deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
