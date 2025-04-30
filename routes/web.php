<?php

use Illuminate\Support\Facades\Route;

Route::get('/stocks-master', function () {
    return view('stocks_master');
})->name('stocks.master');

// Stocks module routes
use App\Http\Controllers\Stocks\Items\StoreItemController;
use App\Http\Controllers\Stocks\Items\StoreAllItemsPricesController;
use App\Http\Controllers\Stocks\Items\StoreStartOtherItemController;
use App\Http\Controllers\Stocks\Inveentory\StoreInventoryTableController;
use App\Http\Controllers\Stocks\Khazina\StoreKhazinaController;
use App\Http\Controllers\Stocks\Other\StoreOtherStorageController;
use App\Http\Controllers\Stocks\Other\StoreOtherSupplierController;
use App\Http\Controllers\Stocks\Other\StoreStartOtherFatoraController;
use App\Http\Controllers\Stocks\Other\StoreSupplierVouchersOtherController;
use App\Http\Controllers\Stocks\Purchase\StoreHadbackPurchaseController;
use App\Http\Controllers\Stocks\Purchase\StorePurchaseController;
use App\Http\Controllers\Stocks\Purchase\StorePurchasesFatoraController;
use App\Http\Controllers\Stocks\Purchase\StorePurchasesOtherFatoraController;
use App\Http\Controllers\Stocks\Purchase\StorePurchasesOthersController;
use App\Http\Controllers\Stocks\Purchase\StoreReturnPurchaseController;
use App\Http\Controllers\Stocks\Purchase\StoreReturnPurchasesItemController;
use App\Http\Controllers\Stocks\Rasid\StoreMasrofAsnafFar3Controller;
use App\Http\Controllers\Stocks\Rasid\StoreRasidAyniController;
use App\Http\Controllers\Stocks\Rasid\StoreRasidAyniBarController;
use App\Http\Controllers\Stocks\Setting\StoreBranchSettingController;
use App\Http\Controllers\Stocks\Setting\StoreTasnefSettingController;
use App\Http\Controllers\Stocks\Setting\StoreUnitsSettingController;
use App\Http\Controllers\Stocks\Tahwelat\StoreTahwelatController;
use App\Http\Controllers\Stocks\Tahwelat\StoreTahwelatAsnafController;

// Items routes
Route::resource('storeitems', StoreItemController::class);
Route::resource('storeallitemsprices', StoreAllItemsPricesController::class);
Route::resource('storestartotheritem', StoreStartOtherItemController::class);

// Inventory routes
Route::resource('storeinventorytable', StoreInventoryTableController::class);

// Khazina routes
Route::resource('storekhazina', StoreKhazinaController::class);

// Other routes
Route::resource('storeotherstorage', StoreOtherStorageController::class);
Route::resource('storeothersupplier', StoreOtherSupplierController::class);
Route::resource('storestartotherfatora', StoreStartOtherFatoraController::class);
Route::resource('storesuppliervouchersother', StoreSupplierVouchersOtherController::class);

// Purchase routes
Route::resource('storehadbackpurchase', StoreHadbackPurchaseController::class);
Route::resource('storepurchase', StorePurchaseController::class);
Route::resource('storepurchasesfatora', StorePurchasesFatoraController::class);
Route::resource('storepurchasesotherfatora', StorePurchasesOtherFatoraController::class);
Route::resource('storepurchasesothers', StorePurchasesOthersController::class);
Route::resource('storereturnpurchase', StoreReturnPurchaseController::class);
Route::resource('storereturnpurchasesitem', StoreReturnPurchasesItemController::class);

// Rasid routes
Route::resource('storemasrofasnaffar3', StoreMasrofAsnafFar3Controller::class);
Route::resource('storerasidayni', StoreRasidAyniController::class);
Route::resource('storerasidaynibar', StoreRasidAyniBarController::class);

// Setting routes
Route::resource('storebranchsetting', StoreBranchSettingController::class);
Route::resource('storetasnefsetting', StoreTasnefSettingController::class);
Route::resource('storeunitssetting', StoreUnitsSettingController::class);

// Tahwelat routes
Route::resource('storetahwelat', StoreTahwelatController::class);
Route::resource('storetahwelatasnaf', StoreTahwelatAsnafController::class);



Route::get('/', function () {
    return view('welcome');
});
