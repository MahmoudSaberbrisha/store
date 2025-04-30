<?php

namespace App\Http\Controllers\Stocks\Items;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Items\StoreStartOtherItem;

class StoreStartOtherItemController extends StocksBaseController
{
    protected $routeName = 'storestartotheritem';

    /**
     * Display a listing of the other start items.
     */
    public function index()
    {
        $items = StoreStartOtherItem::all();
        return view('storestartotheritem.index', compact('items'));
    }

    public function create()
    {
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();
        return view('storestartotheritem.create', compact('branches'));
    }

    /**
     * Store a newly created other start item in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_branch' => 'required|integer|exists:store_branch_settings,id',
            'sub_branch' => 'required|integer|exists:store_branch_settings,id',
            'pill' => 'required|integer',
            'sanf_code' => 'required|string|max:15',
            'available_amount' => 'required|string|max:15',
            'one_buy_cost' => 'required|numeric',
            'amount' => 'required|string|max:15',
            'date' => 'required|date',
            'date_s' => 'nullable|string|max:15',
            'old' => 'required|boolean',
        ]);

        $item = \App\Models\Stocks\Items\StoreStartOtherItem::create($validated);
        $item->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Other start item created successfully.');
    }

    /**
     * Store a newly created other start item in storage.
     */


    /**
     * Display the specified other start item.
     */
    public function show($id)
    {
        $item = StoreStartOtherItem::findOrFail($id);
        return view('storestartotheritem.show', compact('item'));
    }

    /**
     * Update the specified other start item in storage.
     */
    public function update(Request $request, $id)
    {
        $item = StoreStartOtherItem::findOrFail($id);

        $validated = $request->validate([
            // Add validation rules based on StoreStartOtherItem model fields
            'name' => 'sometimes|required|string|max:50',
            'code' => 'sometimes|required|string|max:50|unique:store_start_other_items,code,' . $id,
            'type' => 'nullable|string|max:50',
            'branch_id' => 'sometimes|required|integer',
            'unit' => 'sometimes|required|string|max:50',
            'price' => 'nullable|numeric',
            // Add other fields as per model
        ]);

        $item->update($validated);
        $item->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Other start item updated successfully.');
    }

    /**
     * Remove the specified other start item from storage.
     */
    public function destroy($id)
    {
        $item = StoreStartOtherItem::findOrFail($id);
        $item->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Other start item deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
