<?php

namespace App\Http\Controllers\Stocks\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stocks\Setting\StoreTasnefSetting;

class StoreTasnefSettingController extends Controller
{
    /**
     * Display a listing of the tasnef settings.
     */
    public function index()
    {
        $tasnefs = StoreTasnefSetting::all();
        return view('storetasnefsetting.index', compact('tasnefs'));
    }
    public function create()
    {
        return view('storetasnefsetting.create');
    }

    /**
     * Store a newly created tasnef setting in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
        ]);

        $tasnef = StoreTasnefSetting::create($validated);
        if ($tasnef) {
            $tasnef->save();
        } else {
            return redirect()->back()->with('error', 'Failed to create tasnef setting.');
        }

        return redirect()->route('storetasnefsetting.index')->with('success', 'Tasnef setting created successfully.');
    }

    /**
     * Display the specified tasnef setting.
     */
    public function show($id)
    {
        $tasnef = StoreTasnefSetting::findOrFail($id);
        return view('storetasnefsetting.show', compact('tasnef'));
    }

    /**
     * Update the specified tasnef setting in storage.
     */
    public function update(Request $request, $id)
    {
        $tasnef = StoreTasnefSetting::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'type' => 'sometimes|nullable|string|max:255',
        ]);

        $tasnef->update($validated);
        $tasnef->save();

        return redirect()->route('storetasnefsetting.index')->with('success', 'Tasnef setting updated successfully.');
    }

    /**
     * Remove the specified tasnef setting from storage.
     */
    public function destroy($id)
    {
        $tasnef = StoreTasnefSetting::findOrFail($id);
        $tasnef->delete();

        return redirect()->route('storetasnefsetting.index')->with('success', 'Tasnef setting deleted successfully.');
    }

    // Add any relevant calculations or business logic methods here
}
