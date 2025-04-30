<?php

namespace App\Http\Controllers\Stocks\Items;

use App\Http\Controllers\Stocks\StocksBaseController;
use Illuminate\Http\Request;
use App\Models\Stocks\Items\StoreAllItemsPrices;
use Illuminate\Support\Facades\Log;

class StoreAllItemsPricesController extends StocksBaseController
{
    protected $routeName = 'storeallitemsprices';

    /**
     * Display a listing of the prices.
     */
    public function index()
    {
        $prices = StoreAllItemsPrices::all();
        return view('storeallitemsprices.index', compact('prices'));
    }

    public function create()
    {
        $users = \App\Models\User::select('id', 'name')->get();
        return view('storeallitemsprices.create', compact('users'));
    }

    /**
     * Store a newly created price record in storage.
     */
    public function store(Request $request)
    {
        try {
            Log::info('StoreAllItemsPricesController@store called', $request->all());

            $validated = $request->validate([
                'publisher' => 'nullable|integer|exists:users,id',
                'publisher_name' => 'nullable|string|max:15',
                'sanf_code' => 'nullable|string|max:50',
                'sanf_name' => 'nullable|string|max:50',
                'date_ar' => 'nullable|date',
                'update_time' => 'nullable|date_format:H:i',
                'new_price' => 'nullable|numeric',
                'old_price' => 'nullable|numeric',
            ]);

            $price = StoreAllItemsPrices::create($validated);
            Log::info('Price created successfully.', $price->toArray());
            $price->save();

            return redirect()->route($this->routeName . '.index')->with('success', 'Price created successfully.');
        } catch (\Exception $e) {
            Log::error('Error in StoreAllItemsPricesController@store: ' . $e->getMessage());
            return back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified price record.
     */
    public function show($id)
    {
        $price = StoreAllItemsPrices::findOrFail($id);
        return view('storeallitemsprices.show', compact('price'));
    }

    /**
     * Update the specified price record in storage.
     */
    public function update(Request $request, $id)
    {
        $price = StoreAllItemsPrices::findOrFail($id);

        $validated = $request->validate([
            'publisher' => 'nullable|integer|exists:users,id',
            'publisher_name' => 'nullable|string|max:15',
            'sanf_code' => 'nullable|string|max:50',
            'sanf_name' => 'nullable|string|max:50',
            'date_ar' => 'nullable|string|max:15',
            'update_time' => 'nullable|string|max:15',
            'new_price' => 'nullable|numeric',
            'old_price' => 'nullable|numeric',
        ]);

        $price->update($validated);
        $price->save();

        return redirect()->route($this->routeName . '.index')->with('success', 'Price updated successfully.');
    }

    /**
     * Remove the specified price record from storage.
     */
    public function destroy($id)
    {
        $price = StoreAllItemsPrices::findOrFail($id);
        $price->delete();

        return redirect()->route($this->routeName . '.index')->with('success', 'Price deleted successfully.');
    }

    /**
     * Calculate the price difference percentage.
     */
    public function priceDifferencePercentage($id)
    {
        $price = StoreAllItemsPrices::findOrFail($id);

        if ($price->old_price && $price->old_price > 0) {
            $difference = (($price->new_price - $price->old_price) / $price->old_price) * 100;
        } else {
            $difference = null;
        }

        // Redirect to index with difference as flash data or handle differently as needed
        return redirect()->route($this->routeName . '.index')->with('price_difference_percent', $difference);
    }
}
