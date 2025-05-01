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
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();

        // Generate unique 8-digit pill_num
        do {
            $pill_num = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
            $exists = StoreStartOtherFatora::where('pill_num', $pill_num)->exists();
        } while ($exists);

        return view('storestartotherfatora.create', compact('branches', 'pill_num'));
    }

    /**
     * Store a newly created other start fatora record in storage.
     */
    public function store(Request $request)
    {
        // Generate unique 8-digit pill_num
        do {
            $pill_num = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT);
            $exists = StoreStartOtherFatora::where('pill_num', $pill_num)->exists();
        } while ($exists);

        $request->merge(['pill_num' => $pill_num]);

        $validated = $request->validate([
            'main_branch' => 'required|integer',
            'sub_branch' => 'required|integer',
            'pill_num' => 'required|string|max:15',
            'all_amount' => 'required|string|max:15',
            'all_cost' => 'required|numeric',
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
            'main_branch' => 'sometimes|required|integer',
            'sub_branch' => 'sometimes|required|integer',
            'pill_num' => 'sometimes|required|string|max:15',
            'all_amount' => 'sometimes|required|string|max:15',
            'all_cost' => 'sometimes|required|numeric',
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
