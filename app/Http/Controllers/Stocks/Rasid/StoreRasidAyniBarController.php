<?php

namespace App\Http\Controllers\Stocks\Rasid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Rasid\StoreRasidAyniBar;
use App\Models\Stocks\Setting\StoreBranchSetting;
use App\Models\User;
use App\Models\Stocks\Items\StoreItem;

class StoreRasidAyniBarController extends Controller
{
    public function index()
    {
        $records = StoreRasidAyniBar::all();
        return view('storerasidaynibar.index', compact('records'));
    }

    public function create()
    {
        $mainBranches = StoreBranchSetting::all();
        $subBranches = StoreBranchSetting::all();
        $publishers = User::all();
        $items = StoreItem::all();

        return view('storerasidaynibar.create', compact('mainBranches', 'subBranches', 'publishers', 'items'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(StoreRasidAyniBar::validationRules());

        $record = StoreRasidAyniBar::create($validated);

        if (!$record) {
            return redirect()->back()->with('error', 'Failed to create rasid ayni bar.');
        }

        return redirect()->route('storerasidaynibar.index')->with('success', 'Rasid ayni bar created successfully.');
    }

    public function show($id)
    {
        $record = StoreRasidAyniBar::findOrFail($id);
        return view('storerasidaynibar.show', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $record = StoreRasidAyniBar::findOrFail($id);

        $validated = $request->validate(StoreRasidAyniBar::validationRules(true, $id));

        $updated = $record->update($validated);

        if (!$updated) {
            return redirect()->back()->with('error', 'Failed to update rasid ayni bar.');
        }

        return redirect()->route('storerasidaynibar.index')->with('success', 'Rasid ayni bar updated successfully.');
    }

    public function destroy($id)
    {
        $record = StoreRasidAyniBar::findOrFail($id);
        $record->delete();

        return redirect()->route('storerasidaynibar.index')->with('success', 'Rasid ayni bar deleted successfully.');
    }
}
