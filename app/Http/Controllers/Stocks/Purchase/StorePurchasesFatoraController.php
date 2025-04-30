<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StorePurchasesFatora;

class StorePurchasesFatoraController extends StocksBaseController
{
    protected $routeName = 'storepurchasesfatora';

    /**
     * Display a listing of the purchases fatora records.
     */
    public function index()
    {
        $fatoras = StorePurchasesFatora::all();
        return view('storepurchasesfatora.index', compact('fatoras'));
    }

    public function create()
    {
        return view('storepurchasesfatora.create');
    }

    /**
     * Store a newly created purchases fatora record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StorePurchasesFatora model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $fatora = StorePurchasesFatora::create($validated);
        $fatora->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases fatora created successfully.');
    }

    /**
     * Display the specified purchases fatora record.
     */
    public function show($id)
    {
        $fatora = StorePurchasesFatora::findOrFail($id);
        return view('storepurchasesfatora.show', compact('fatora'));
    }

    /**
     * Update the specified purchases fatora record in storage.
     */
    public function update(Request $request, $id)
    {
        $fatora = StorePurchasesFatora::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StorePurchasesFatora model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $fatora->update($validated);
        $fatora->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases fatora updated successfully.');
    }

    /**
     * Remove the specified purchases fatora record from storage.
     */
    public function destroy($id)
    {
        $fatora = StorePurchasesFatora::findOrFail($id);
        $fatora->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases fatora deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
