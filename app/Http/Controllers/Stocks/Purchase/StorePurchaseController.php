<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StorePurchase;

class StorePurchaseController extends StocksBaseController
{
    protected $routeName = 'storepurchase';

    /**
     * Display a listing of the purchase records.
     */
    public function index()
    {
        $purchases = StorePurchase::all();
        return view('storepurchase.index', compact('purchases'));
    }
    public function create()
    {
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();

        // Generate next unique sarf_rkm
        $maxSarfRkm = \App\Models\Stocks\Purchase\StorePurchase::max('sarf_rkm');
        if ($maxSarfRkm === null) {
            $nextSarfRkm = 'SRF0001';
        } else {
            // Extract numeric part and increment
            preg_match('/(\d+)$/', $maxSarfRkm, $matches);
            $number = $matches ? intval($matches[1]) : 0;
            $nextNumber = $number + 1;
            $nextSarfRkm = 'SRF' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        }

        // Generate next unique fatora_code as 8-digit random number
        do {
            $randomFatoraCode = mt_rand(10000000, 99999999);
            $exists = \App\Models\Stocks\Purchase\StorePurchase::where('fatora_code', $randomFatoraCode)->exists();
        } while ($exists);
        $nextFatoraCode = $randomFatoraCode;

        // Generate next unique marge3_num
        $maxMarge3Num = \App\Models\Stocks\Purchase\StorePurchase::max('marge3_num');
        if ($maxMarge3Num === null) {
            $nextMarge3Num = 'MRG0001';
        } else {
            preg_match('/(\d+)$/', $maxMarge3Num, $matches);
            $number = $matches ? intval($matches[1]) : 0;
            $nextNumber = $number + 1;
            $nextMarge3Num = 'MRG' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        }

        // Fetch suppliers and products
        $suppliers = \App\Models\Stocks\Other\StoreOtherSupplier::all();
        $products = \App\Models\Stocks\Items\StoreItem::all();

        // Fetch publishers (users)
        $publishers = \App\Models\User::all();

        // Generate current date for date and date_s
        $currentDate = now()->toDateString();

        return view('storepurchase.create', compact('branches', 'nextSarfRkm', 'nextFatoraCode', 'nextMarge3Num', 'suppliers', 'products', 'publishers', 'currentDate'));
    }

    /**
     * Store a newly created purchase record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'marge3_num' => 'nullable|string|max:255',
            'main_branch_id_fk' => 'required|integer',
            'sub_branch_id_fk' => 'required|integer',
            'sarf_rkm' => 'nullable|string|max:255',
            'fatora_code' => 'required|integer',
            'fatora_date' => 'nullable|date',
            'supplier_code' => 'required|integer',
            'product_code' => 'required|string',
            'amount_buy' => 'required|numeric',
            'all_cost_buy' => 'required|numeric',
            'one_price_sell' => 'required|numeric',
            'date' => 'required|date',
            'date_s' => 'required|date',
            'publisher' => 'required|integer',
            'sarf_far3_pill_num' => 'nullable|string|max:255',
            'old' => 'nullable|boolean',
        ]);

        $purchase = StorePurchase::create($validated);
        $purchase->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Purchase created successfully.');
    }

    /**
     * Display the specified purchase record.
     */
    public function show($id)
    {
        $purchase = StorePurchase::findOrFail($id);
        return view('storepurchase.show', compact('purchase'));
    }

    /**
     * Update the specified purchase record in storage.
     */
    public function update(Request $request, $id)
    {
        $purchase = StorePurchase::findOrFail($id);

        $validated = $request->validate([
            'marge3_num' => 'sometimes|nullable|string|max:255',
            'main_branch_id_fk' => 'sometimes|required|integer',
            'sub_branch_id_fk' => 'sometimes|required|integer',
            'sarf_rkm' => 'sometimes|nullable|string|max:255',
            'fatora_code' => 'sometimes|required|integer',
            'fatora_date' => 'sometimes|nullable|date',
            'supplier_code' => 'sometimes|required|integer',
            'product_code' => 'sometimes|required|integer',
            'amount_buy' => 'sometimes|required|numeric',
            'all_cost_buy' => 'sometimes|required|numeric',
            'one_price_sell' => 'sometimes|required|numeric',
            'date' => 'sometimes|required|integer',
            'date_s' => 'sometimes|required|integer',
            'publisher' => 'sometimes|required|integer',
            'sarf_far3_pill_num' => 'sometimes|nullable|string|max:255',
            'old' => 'sometimes|nullable|boolean',
        ]);

        $purchase->update($validated);
        $purchase->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchase updated successfully.');
    }

    /**
     * Remove the specified purchase record from storage.
     */
    public function destroy($id)
    {
        $purchase = StorePurchase::findOrFail($id);
        $purchase->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchase deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}