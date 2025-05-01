<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StoreReturnPurchasesItem;

class StoreReturnPurchasesItemController extends StocksBaseController
{
    protected $routeName = 'storereturnpurchasesitem';

    /**
     * Display a listing of the return purchases item records.
     */
    public function index()
    {
        $items = StoreReturnPurchasesItem::all();
        return view('storereturnpurchasesitem.index', compact('items'));
    }

    public function create()
    {
        return view('storereturnpurchasesitem.create');
    }

    /**
     * Store a newly created return purchases item record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'return_purchases_id' => 'required|integer',
            'item_code' => 'required|integer',
            'item_name' => 'required|string|max:255',
            'one_price_buy' => 'required|numeric',
            'return_amount' => 'required|numeric',
            'price_return_amount' => 'required|numeric',
            'date' => 'required|date',
            'date_ar' => 'nullable|string',
            'publisher' => 'required|integer',
            'publisher_name' => 'nullable|string|max:255',
            'sub_branch_id_fk' => 'required|integer',
            'supplier_code' => 'required|integer',
        ]);

        $item = StoreReturnPurchasesItem::create($validated);
        if ($item) {
            $item->save();
        } else {
            return redirect()->back()->with('error', 'Failed to create return purchases item.');
        }

        // Assuming you have a method to handle the creation of related records


        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchases item created successfully.');
    }

    /**
     * Display the specified return purchases item record.
     */
    public function show($id)
    {
        $item = StoreReturnPurchasesItem::findOrFail($id);
        return view('storereturnpurchasesitem.show', compact('item'));
    }

    /**
     * Update the specified return purchases item record in storage.
     */
    public function update(Request $request, $id)
    {
        $item = StoreReturnPurchasesItem::findOrFail($id);

        $validated = $request->validate([
            'return_purchases_id' => 'sometimes|required|integer',
            'item_code' => 'sometimes|required|integer',
            'item_name' => 'sometimes|required|string|max:255',
            'one_price_buy' => 'sometimes|required|numeric',
            'return_amount' => 'sometimes|required|numeric',
            'price_return_amount' => 'sometimes|required|numeric',
            'date' => 'sometimes|required|date',
            'date_ar' => 'sometimes|nullable|string',
            'publisher' => 'sometimes|required|integer',
            'publisher_name' => 'sometimes|nullable|string|max:255',
            'sub_branch_id_fk' => 'sometimes|required|integer',
            'supplier_code' => 'sometimes|required|integer',
        ]);

        $item->update($validated);
        if ($item) {
            $item->save();
        } else {
            return redirect()->back()->with('error', 'Failed to update return purchases item.');
        }

        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchases item updated successfully.');
    }

    /**
     * Remove the specified return purchases item record from storage.
     */
    public function destroy($id)
    {
        $item = StoreReturnPurchasesItem::findOrFail($id);
        $item->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Return purchases item deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
