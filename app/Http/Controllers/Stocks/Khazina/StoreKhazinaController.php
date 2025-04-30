<?php

namespace App\Http\Controllers\Stocks\Khazina;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Khazina\StoreKhazina;

class StoreKhazinaController extends StocksBaseController
{
    protected $routeName = 'storekhazina';

    /**
     * Display a listing of the khazina records.
     */
    public function index()
    {
        $khazinas = StoreKhazina::all();
        return view('storekhazina.index', compact('khazinas'));
    }

    public function create()
    {
        return view(' storekhazina.create');
    }

    /**
     * Store a newly created khazina record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules based on StoreKhazina model fields
            // Placeholder example:
            'field1' => 'required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $khazina = StoreKhazina::create($validated);
        $khazina->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Khazina created successfully.');
    }

    /**
     * Display the specified khazina record.
     */
    public function show($id)
    {
        $khazina = StoreKhazina::findOrFail($id);
        return view('storekhazina.show', compact('khazina'));
    }

    /**
     * Update the specified khazina record in storage.
     */
    public function update(Request $request, $id)
    {
        $khazina = StoreKhazina::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreKhazina model fields
            'field1' => 'sometimes|required|string',
            'field2' => 'nullable|integer',
            // Add other fields as per model
        ]);

        $khazina->update($validated);
        $khazina->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Khazina updated successfully.');
    }

    /**
     * Remove the specified khazina record from storage.
     */
    public function destroy($id)
    {
        $khazina = StoreKhazina::findOrFail($id);
        $khazina->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Khazina deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
