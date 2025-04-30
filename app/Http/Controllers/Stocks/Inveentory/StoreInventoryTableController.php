<?php

namespace App\Http\Controllers\Stocks\Inveentory;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Inveentory\StoreInventoryTable;

class StoreInventoryTableController extends StocksBaseController
{
    protected $routeName = 'storeinventorytable';

    /**
     * Display a listing of the inventory records.
     */
    public function index()
    {
        $inventories = StoreInventoryTable::all();
        $items = \App\Models\Stocks\Items\StoreItem::all();
        $employees = \App\Models\Employee::all();
        $users = \App\Models\User::all();
        return view('storeinventorytable.index', compact('inventories', 'items', 'employees', 'users'));
    }

    /**
     * Store a newly created inventory record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_id_fk' => 'required|integer|exists:store_item,id',
            'storage_id_fk' => 'required|string|max:50',
            'amount' => 'required|integer',
            'num_invent' => 'required|integer',
            'available_amount' => 'required|string|max:50',
            'invent_date' => 'required|string|max:50',
            'sanf_type_gym' => 'required|boolean',
            'employee_id_fk' => 'nullable|integer|exists:employees,id',
            'date' => 'required|string|max:50',
            'date_s' => 'required|string|max:50',
            'date_ar' => 'required|string|max:50',
            'publisher' => 'required|string|max:50',
            'sub_branch_id_fk' => 'required|string|max:50',
            'emp_code' => 'nullable|integer',
            'user_id' => 'nullable|integer|exists:users,id',
            'deficit_amount' => 'required|integer',
            'increase_amount' => 'required|integer',
            'notes' => 'nullable|string|max:50',
        ]);

        $inventory = StoreInventoryTable::create($validated);
        $inventory->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Inventory created successfully.');
    }

    /**
     * Display the specified inventory record.
     */
    public function show($id)
    {
        $inventory = StoreInventoryTable::findOrFail($id);
        return view('storeinventorytable.show', compact('inventory'));
    }
    public function create()
    {
        $items = \App\Models\Stocks\Items\StoreItem::all();
        $employees = \App\Models\Employee::all();
        $users = \App\Models\User::all();
        $inventories = StoreInventoryTable::all();

        return view('storeinventorytable.create', compact('items', 'employees', 'users', 'inventories'));
    }

    /**
     * Update the specified inventory record in storage.
     */
    public function update(Request $request, $id)
    {
        $inventory = StoreInventoryTable::findOrFail($id);

        $validated = $request->validate([
            'item_id_fk' => 'sometimes|required|integer|exists:store_item,id',
            'storage_id_fk' => 'sometimes|required|string|max:50',
            'amount' => 'sometimes|required|integer',
            'num_invent' => 'sometimes|required|integer',
            'available_amount' => 'sometimes|required|string|max:50',
            'invent_date' => 'sometimes|required|string|max:50',
            'sanf_type_gym' => 'sometimes|required|boolean',
            'employee_id_fk' => 'nullable|integer|exists:employees,id',
            'date' => 'sometimes|required|string|max:50',
            'date_s' => 'sometimes|required|string|max:50',
            'date_ar' => 'sometimes|required|string|max:50',
            'publisher' => 'sometimes|required|string|max:50',
            'sub_branch_id_fk' => 'sometimes|required|string|max:50',
            'emp_code' => 'nullable|integer',
            'user_id' => 'nullable|integer|exists:users,id',
            'deficit_amount' => 'sometimes|required|integer',
            'increase_amount' => 'sometimes|required|integer',
            'notes' => 'nullable|string|max:50',
        ]);

        $inventory->update($validated);
        $inventory->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Inventory updated successfully.');
    }

    /**
     * Remove the specified inventory record from storage.
     */
    public function destroy($id)
    {
        $inventory = StoreInventoryTable::findOrFail($id);
        $inventory->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Inventory deleted successfully.');
    }

    /**
     * Calculate the net inventory amount (increase - deficit).
     */
    public function netInventoryAmount($id)
    {
        $inventory = StoreInventoryTable::findOrFail($id);

        $netAmount = $inventory->increase_amount - $inventory->deficit_amount;

        // Redirect to index with net amount as flash data or handle differently as needed
        return redirect()->route($this->routeName . '.index')->with('net_inventory_amount', $netAmount);
    }
}
