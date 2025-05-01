<?php

namespace App\Http\Controllers\Stocks\Purchase;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Purchase\StorePurchasesOtherFatora;
use App\Models\Stocks\Other\StoreOtherSupplier;
use App\Models\Stocks\Khazina\StoreKhazina;

class StorePurchasesOtherFatoraController extends StocksBaseController
{
    protected $routeName = 'storepurchasesotherfatora';

    /**
     * Display a listing of the purchases other fatora records.
     */
    public function index()
    {
        $fatoras = StorePurchasesOtherFatora::all();
        return view('storepurchasesotherfatora.index', compact('fatoras'));
    }

    public function create()
    {
        // Fetch publishers for dropdown
        $publishers = \App\Models\User::all();
        $branches = \App\Models\Stocks\Setting\StoreBranchSetting::all();

        // Fetch suppliers and boxes for dropdowns
        $suppliers = StoreOtherSupplier::all();
        $boxes = StoreKhazina::all();

        // Current timestamps for default values
        $currentTimestamp = now()->toDateString();
        $currentTimestampShort = now()->toDateString();

        // Generate next unique fatora_code
        $maxFatoraCode = StorePurchasesOtherFatora::max('fatora_code');
        $nextFatoraCode = $maxFatoraCode ? $maxFatoraCode + 1 : 1;

        return view('storepurchasesotherfatora.create', compact('publishers', 'currentTimestamp', 'currentTimestampShort', 'suppliers', 'boxes', 'branches', 'nextFatoraCode'));
    }


    /**
     * Store a newly created purchases other fatora record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_branch_id_fk' => 'required|integer',
            'sub_branch_id_fk' => 'required|integer',
            'fatora_code' => 'required|integer',
            'fatora_date' => 'nullable|date',
            'fatora_print_date' => 'nullable|date',
            'supplier_code' => 'required|integer',
            'barcode' => 'nullable|string',
            'box_id_fk' => 'nullable|integer',
            'box_name' => 'nullable|string',
            'storage_id_fk' => 'nullable|integer',
            'storage_name' => 'nullable|string',
            'fatora_cost_before_discount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'fatora_cost_after_discount' => 'required|numeric',
            'paid_type' => 'required|integer',
            'dayen' => 'nullable|string',
            'paid' => 'required|numeric',
            'remain' => 'required|numeric',
            'sheek_num' => 'nullable|string',
            'sheek_status' => 'nullable|string',
            'sheek_value' => 'nullable|numeric',
            'recived_date' => 'nullable|date',
            'accept_date' => 'nullable|date',
            'byan' => 'nullable|string',
            'marge3_num' => 'nullable|string',
            'date_s' => 'required|date',
            'date_ar' => 'nullable|date',
            'publisher' => 'required|integer',
            'deport' => 'nullable|string',
            'had_back' => 'required|integer',
            'had_back_reason' => 'nullable|string',
            'had_back_date' => 'nullable|date',
            'had_back_date_s' => 'nullable|date',
            'had_back_value' => 'nullable|numeric',
            'type' => 'nullable|string',
        ]);

        $fatora = StorePurchasesOtherFatora::create($validated);
        $fatora->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases other fatora created successfully.');
    }

    /**
     * Display the specified purchases other fatora record.
     */
    public function show($id)
    {
        $fatora = StorePurchasesOtherFatora::findOrFail($id);
        return view('storepurchasesotherfatora.show', compact('fatora'));
    }

    /**
     * Update the specified purchases other fatora record in storage.
     */
    public function update(Request $request, $id)
    {
        $fatora = StorePurchasesOtherFatora::findOrFail($id);

        $validated = $request->validate([
            'main_branch_id_fk' => 'sometimes|required|integer',
            'sub_branch_id_fk' => 'sometimes|required|integer',
            'fatora_code' => 'sometimes|required|integer',
            'fatora_date' => 'sometimes|nullable|date',
            'fatora_print_date' => 'sometimes|nullable|date',
            'supplier_code' => 'sometimes|required|integer',
            'barcode' => 'sometimes|nullable|string',
            'box_id_fk' => 'sometimes|nullable|integer',
            'box_name' => 'sometimes|nullable|string',
            'storage_id_fk' => 'sometimes|nullable|integer',
            'storage_name' => 'sometimes|nullable|string',
            'fatora_cost_before_discount' => 'sometimes|required|numeric',
            'discount' => 'sometimes|nullable|numeric',
            'fatora_cost_after_discount' => 'sometimes|required|numeric',
            'paid_type' => 'sometimes|required|integer',
            'dayen' => 'sometimes|nullable|string',
            'paid' => 'sometimes|required|numeric',
            'remain' => 'sometimes|required|numeric',
            'sheek_num' => 'sometimes|nullable|string',
            'sheek_status' => 'sometimes|nullable|string',
            'sheek_value' => 'sometimes|nullable|numeric',
            'recived_date' => 'sometimes|nullable|date',
            'accept_date' => 'sometimes|nullable|date',
            'byan' => 'sometimes|nullable|string',
            'marge3_num' => 'sometimes|nullable|string',
            'date_s' => 'sometimes|required|integer',
            'date_ar' => 'sometimes|nullable|string',
            'publisher' => 'sometimes|required|integer',
            'deport' => 'sometimes|nullable|string',
            'had_back' => 'sometimes|required|integer',
            'had_back_reason' => 'sometimes|nullable|string',
            'had_back_date' => 'sometimes|nullable|date',
            'had_back_date_s' => 'sometimes|nullable|integer',
            'had_back_value' => 'sometimes|nullable|numeric',
            'type' => 'sometimes|nullable|string',
        ]);

        $fatora->update($validated);
        $fatora->save();


        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases other fatora updated successfully.');
    }

    /**
     * Remove the specified purchases other fatora record from storage.
     */
    public function destroy($id)
    {
        $fatora = StorePurchasesOtherFatora::findOrFail($id);
        $fatora->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Purchases other fatora deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
