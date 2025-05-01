<?php

namespace App\Http\Controllers\Stocks\Other;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Other\StoreOtherStorage;

class StoreOtherStorageController extends StocksBaseController
{
    protected $routeName = 'storeotherstorage';

    /**
     * Display a listing of the other storage records.
     */
    public function index()
    {
        $storages = StoreOtherStorage::all();
        return view('storeotherstorage.index', compact('storages'));
    }
    public function create()
    {
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();
        return view('storeotherstorage.create', compact('branches'));
    }

    /**
     * Store a newly created other storage record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:15',
            'from_id_fk' => 'required|integer|exists:store_branch_settings,id',
        ]);

        $storage = StoreOtherStorage::create($validated);
        $storage->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Storage created successfully.');
    }

    /**
     * Display the specified other storage record.
     */
    public function show($id)
    {
        $storage = StoreOtherStorage::findOrFail($id);
        return view('storeotherstorage.show', compact('storage'));
    }

    /**
     * Update the specified other storage record in storage.
     */
    public function update(Request $request, $id)
    {
        $storage = StoreOtherStorage::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:15',
            'from_id_fk' => 'sometimes|required|integer|exists:store_branch_settings,id',
        ]);

        $storage->update($validated);
        $storage->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Storage updated successfully.');
    }

    /**
     * Remove the specified other storage record from storage.
     */
    public function destroy($id)
    {
        $storage = StoreOtherStorage::findOrFail($id);
        $storage->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Storage deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
