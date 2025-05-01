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
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();
        $suppliers = \App\Models\Stocks\Other\StoreOtherSupplier::all();
        $publishers = \App\Models\User::all();

        // Generate current timestamps for date and date_s
        $currentTimestamp = now()->toDateString();
        $currentTimestampShort = now()->toDateString();

        // Generate unique sarf_far3_pill_num
        $maxSarfNum = \App\Models\Stocks\Purchase\StorePurchasesFatora::max('sarf_far3_pill_num');
        if ($maxSarfNum === null) {
            $nextSarfNum = 'SFP0001';
        } else {
            preg_match('/(\d+)$/', $maxSarfNum, $matches);
            $number = $matches ? intval($matches[1]) : 0;
            $nextNumber = $number + 1;
            $nextSarfNum = 'SFP' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        }

        return view('storepurchasesfatora.create', compact('branches', 'suppliers', 'publishers', 'currentTimestamp', 'currentTimestampShort', 'nextSarfNum'));
    }

    /**
     * Store a newly created purchases fatora record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_branch_id_fk' => 'required|integer',
            'sub_branch_id_fk' => 'required|integer',
            'fatora_date' => 'nullable|date',
            'supplier_code' => 'required|integer',
            'fatora_cost_before_discount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'fatora_cost_after_discount' => 'required|numeric',
            'paid_type' => 'required|integer',
            'box_name' => 'required|integer',
            'paid' => 'required|numeric',
            'remain' => 'required|numeric',
            'byan' => 'nullable|string',
            'date' => 'required|date',
            'date_s' => 'required|date',
            'publisher' => 'required|integer',
            'had_back' => 'required|integer',
            'sarf_far3_pill_num' => 'nullable|string',
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
            'main_branch_id_fk' => 'sometimes|required|integer',
            'sub_branch_id_fk' => 'sometimes|required|integer',
            'fatora_date' => 'sometimes|nullable|date',
            'supplier_code' => 'sometimes|required|integer',
            'fatora_cost_before_discount' => 'sometimes|required|numeric',
            'discount' => 'sometimes|nullable|numeric',
            'fatora_cost_after_discount' => 'sometimes|required|numeric',
            'paid_type' => 'sometimes|required|integer',
            'box_name' => 'sometimes|required|integer',
            'paid' => 'sometimes|required|numeric',
            'remain' => 'sometimes|required|numeric',
            'byan' => 'sometimes|nullable|string',
            'date' => 'sometimes|required|date',
            'date_s' => 'sometimes|required|date',
            'publisher' => 'sometimes|required|integer',
            'had_back' => 'sometimes|required|string',
            'sarf_far3_pill_num' => 'sometimes|nullable|string',
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
