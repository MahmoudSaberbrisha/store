@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Stocks Master Navigation</h1>

        <div class="row">
            @php
                $links = [
                    ['route' => 'storeitems.index', 'label' => 'Store Items', 'icon' => 'fas fa-box'],
                    ['route' => 'storeallitemsprices.index', 'label' => 'All Items Prices', 'icon' => 'fas fa-tags'],
                    [
                        'route' => 'storestartotheritem.index',
                        'label' => 'Start Other Item',
                        'icon' => 'fas fa-plus-circle',
                    ],
                    ['route' => 'storeinventorytable.index', 'label' => 'Inventory Table', 'icon' => 'fas fa-table'],
                    ['route' => 'storekhazina.index', 'label' => 'Khazina', 'icon' => 'fas fa-warehouse'],
                    ['route' => 'storeotherstorage.index', 'label' => 'Other Storage', 'icon' => 'fas fa-boxes'],
                    ['route' => 'storeothersupplier.index', 'label' => 'Other Supplier', 'icon' => 'fas fa-truck'],
                    [
                        'route' => 'storestartotherfatora.index',
                        'label' => 'Start Other Fatora',
                        'icon' => 'fas fa-file-invoice',
                    ],
                    ['route' => 'storehadbackpurchase.index', 'label' => 'Hadback Purchase', 'icon' => 'fas fa-undo'],
                    ['route' => 'storepurchase.index', 'label' => 'Purchase', 'icon' => 'fas fa-shopping-cart'],
                    [
                        'route' => 'storepurchasesfatora.index',
                        'label' => 'Purchases Fatora',
                        'icon' => 'fas fa-receipt',
                    ],
                    [
                        'route' => 'storepurchasesotherfatora.index',
                        'label' => 'Purchases Other Fatora',
                        'icon' => 'fas fa-file-alt',
                    ],
                    [
                        'route' => 'storepurchasesothers.index',
                        'label' => 'Purchases Others',
                        'icon' => 'fas fa-cart-plus',
                    ],
                    [
                        'route' => 'storereturnpurchase.index',
                        'label' => 'Return Purchase',
                        'icon' => 'fas fa-exchange-alt',
                    ],
                    [
                        'route' => 'storereturnpurchasesitem.index',
                        'label' => 'Return Purchases Item',
                        'icon' => 'fas fa-undo-alt',
                    ],
                    ['route' => 'storemasrofasnaffar3.index', 'label' => 'Masrof Asnaf Far3', 'icon' => 'fas fa-coins'],
                    ['route' => 'storerasidayni.index', 'label' => 'Rasid Ayni', 'icon' => 'fas fa-file-contract'],
                    [
                        'route' => 'storerasidaynibar.index',
                        'label' => 'Rasid Ayni Bar',
                        'icon' => 'fas fa-file-invoice-dollar',
                    ],
                    ['route' => 'storebranchsetting.index', 'label' => 'Branch Setting', 'icon' => 'fas fa-cogs'],
                    ['route' => 'storetasnefsetting.index', 'label' => 'Tasnef Setting', 'icon' => 'fas fa-sliders-h'],
                    [
                        'route' => 'storeunitssetting.index',
                        'label' => 'Units Setting',
                        'icon' => 'fas fa-balance-scale',
                    ],
                    ['route' => 'storetahwelat.index', 'label' => 'Tahwelat', 'icon' => 'fas fa-exchange-alt'],
                    ['route' => 'storetahwelatasnaf.index', 'label' => 'Tahwelat Asnaf', 'icon' => 'fas fa-random'],
                ];
            @endphp

            @foreach ($links as $link)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <i class="{{ $link['icon'] }} fa-2x mb-3 text-primary"></i>
                            <h5 class="card-title">{{ $link['label'] }}</h5>
                            <a href="{{ route($link['route']) }}" class="btn btn-primary btn-sm">Go</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
