<?php

namespace App\Http\Controllers\Stocks\Other;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Other\StoreStartOtherFatora;

class StoreStartOtherFatoraController extends StocksBaseController
{
    protected $routeName = 'storestartotherfatora';

    /**
     * Display a listing of the other start fatora records.
     */
    public function index()
    {
        $fatoras = StoreStartOtherFatora::all();
        return view('storestartotherfatora.index', compact('fatoras'));
    }
    public function create()
    {
        return view('storestartotherfatora.create');
    }

    /**
     * Store a newly created other start fatora record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreStartOtherFatora model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $fatora = StoreStartOtherFatora::create($validated);
        $fatora->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Other start fatora created successfully.');
    }

    /**
     * Display the specified other start fatora record.
     */
    public function show($id)
    {
        $fatora = StoreStartOtherFatora::findOrFail($id);
        return view('storestartotherfatora.show', compact('fatora'));
    }

    /**
     * Update the specified other start fatora record in storage.
     */
    public function update(Request $request, $id)
    {
        $fatora = StoreStartOtherFatora::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreStartOtherFatora model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $fatora->update($validated);
        $fatora->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Other start fatora updated successfully.');
    }

    /**
     * Remove the specified other start fatora record from storage.
     */
    public function destroy($id)
    {
        $fatora = StoreStartOtherFatora::findOrFail($id);
        $fatora->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Other start fatora deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
