<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StoreReturnPurchase;

class StoreReturnPurchaseController extends StocksBaseController
{
    protected $routeName = 'storereturnpurchase';

    /**
     * Display a listing of the return purchase records.
     */
    public function index()
    {
        $returns = StoreReturnPurchase::all();
        return view('storereturnpurchase.index', compact('returns'));
    }

    public function create()
    {
        // Fetch publishers for dropdown
        $publishers = \App\Models\User::all();
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();

        // Fetch suppliers and boxes for dropdowns
        $suppliers = \App\Models\Stocks\Other\StoreOtherSupplier::all();
        $boxes = \App\Models\Stocks\Khazina\StoreKhazina::all();

        // Fetch products for product name dropdown
        $products = \App\Models\Stocks\Items\StoreItem::all();

        // Fetch distinct purchase invoice codes from StorePurchasesOthers
        $purchaseInvoiceCodes = \App\Models\Stocks\Purchase\StorePurchasesOthers::select('fatora_code')->distinct()->orderBy('fatora_code', 'desc')->get();

        return view('storereturnpurchase.create', compact('publishers', 'suppliers', 'boxes', 'branches', 'products', 'purchaseInvoiceCodes'));
    }

    /**
     * Store a newly created return purchase record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fatora_code_purchases' => 'required|integer',
            'total_price' => 'required|numeric',
            'date' => 'required|date',
            'date_ar' => 'nullable|string',
            'publisher' => 'required|integer',
            'publisher_name' => 'nullable|string|max:255',
            'supplier_code' => 'required|integer',
        ]);

        $return = StoreReturnPurchase::create($validated);
        $return->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchase created successfully.');
    }

    /**
     * Display the specified return purchase record.
     */
    public function show($id)
    {
        $return = StoreReturnPurchase::findOrFail($id);
        return view('storereturnpurchase.show', compact('return'));
    }

    /**
     * Update the specified return purchase record in storage.
     */
    public function update(Request $request, $id)
    {
        $return = StoreReturnPurchase::findOrFail($id);

        $validated = $request->validate([
            'fatora_code_purchases' => 'sometimes|required|integer',
            'total_price' => 'sometimes|required|numeric',
            'date' => 'sometimes|required|date',
            'date_ar' => 'sometimes|nullable|string',
            'publisher' => 'sometimes|required|integer',
            'publisher_name' => 'sometimes|nullable|string|max:255',
            'supplier_code' => 'sometimes|required|integer',
        ]);

        $return->update($validated);
        $return->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchase updated successfully.');
    }

    /**
     * Remove the specified return purchase record from storage.
     */
    public function destroy($id)
    {
        $return = StoreReturnPurchase::findOrFail($id);
        $return->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchase deleted successfully.');
    }

    /**
     * API endpoint to get the paid value for a given purchase invoice code.
     */
    public function getPaidValue($code)
    {
        // Trim and cast code to string to avoid mismatch
        $code = trim($code);

        $purchase = \App\Models\Stocks\Purchase\StorePurchasesOtherFatora::where('fatora_code', $code)->first();

        if ($purchase) {
            return response()->json([
                'paid' => $purchase->paid ?? 0,
                'publisher_name' => $purchase->publisher ?? ''
            ]);
        } else {
            return response()->json(['paid' => 0, 'publisher_name' => '']);
        }
    }


    // Add any relevant calculations or business logic methods here
}