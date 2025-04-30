<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StorePurchasesOtherFatora;

class StorePurchasesOtherFatoraController extends StocksBaseController
{
    protected $routeName = 'storepurchasesotherfatora';

    /**
     * Display a listing of the purchases other fatora records.
     */
    public function index()
    {
        $fatoras = StorePurchasesOtherFatora::all();
        return view('storepurchasesotherfatora.index', compact('fatoras'));
    }

    public function create()
    {
        return view('storepurchasesotherfatora.create');
    }

    /**
     * Store a newly created purchases other fatora record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StorePurchasesOtherFatora model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $fatora = StorePurchasesOtherFatora::create($validated);
        $fatora->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases other fatora created successfully.');
    }

    /**
     * Display the specified purchases other fatora record.
     */
    public function show($id)
    {
        $fatora = StorePurchasesOtherFatora::findOrFail($id);
        return view('storepurchasesotherfatora.show', compact('fatora'));
    }

    /**
     * Update the specified purchases other fatora record in storage.
     */
    public function update(Request $request, $id)
    {
        $fatora = StorePurchasesOtherFatora::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StorePurchasesOtherFatora model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $fatora->update($validated);
        $fatora->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases other fatora updated successfully.');
    }

    /**
     * Remove the specified purchases other fatora record from storage.
     */
    public function destroy($id)
    {
        $fatora = StorePurchasesOtherFatora::findOrFail($id);
        $fatora->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases other fatora deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
