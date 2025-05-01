<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StoreHadbackPurchase;
use App\Models\Stocks\Other\StoreOtherSupplier;
use App\Models\User;

class StoreHadbackPurchaseController extends StocksBaseController
{
    protected $routeName = 'storehadbackpurchase';

    /**
     * Display a listing of the hadback purchase records.
     */
    public function index()
    {
        $hadbacks = StoreHadbackPurchase::all();
        return view('storehadbackpurchase.index', compact('hadbacks'));
    }

    public function create()
    {
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();

        $suppliers = StoreOtherSupplier::all();
        $users = User::all();
        $invoices = \App\Models\Stocks\Other\StoreStartOtherFatora::select('pill_num', 'all_amount')->get();

        return view('storehadbackpurchase.create', compact('branches', 'suppliers', 'users', 'invoices'));
    }

    /**
     * Store a newly created hadback purchase record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_branch_id_fk' => 'required|integer',
            'sub_branch_id_fk' => 'required|integer',
            'supplier_code' => 'required|integer',
            'fatora_code' => 'required|integer',
            'product_code' => 'required|integer',
            'amount_buy' => 'required|numeric',
            'all_cost_buy' => 'required|numeric',
            'one_price_sell' => 'required|numeric',
            'hadback_amount' => 'required|integer',
            'date' => 'required|date',
            'date_s' => 'required|date',
            'publisher' => 'required|integer',
        ]);

        $hadback = StoreHadbackPurchase::create($validated);
        $hadback->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Hadback purchase created successfully.');
    }

    /**
     * Display the specified hadback purchase record.
     */
    public function show($id)
    {
        $hadback = StoreHadbackPurchase::findOrFail($id);
        return view('storehadbackpurchase.show', compact('hadback'));
    }

    /**
     * Update the specified hadback purchase record in storage.
     */
    public function update(Request $request, $id)
    {
        $hadback = StoreHadbackPurchase::findOrFail($id);

        $validated = $request->validate([
            'main_branch_id_fk' => 'sometimes|required|integer',
            'sub_branch_id_fk' => 'sometimes|required|integer',
            'supplier_code' => 'sometimes|required|integer',
            'fatora_code' => 'sometimes|required|integer',
            'product_code' => 'sometimes|required|integer',
            'amount_buy' => 'sometimes|required|numeric',
            'all_cost_buy' => 'sometimes|required|numeric',
            'one_price_sell' => 'sometimes|required|numeric',
            'hadback_amount' => 'sometimes|required|integer',
            'date' => 'sometimes|required|integer',
            'date_s' => 'sometimes|required|integer',
            'publisher' => 'sometimes|required|integer',
        ]);

        $hadback->update($validated);
        $hadback->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Hadback purchase updated successfully.');
    }

    /**
     * Remove the specified hadback purchase record from storage.
     */
    public function destroy($id)
    {
        $hadback = StoreHadbackPurchase::findOrFail($id);
        $hadback->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Hadback purchase deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
