@extends('layouts.app')

@section('content')
    <style>
    .stock-card {
    width: 80%;
    height: 300px;
    aspect-ratio: 1.5 / 2;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    perspective: 5000px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    background-image: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%),
    linear-gradient(225deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%);
    background-size: 40px 40px;
    background-position: 0 0, 20px 20px;
    }

    .col-5th {
    flex: 0 0 20%;
    max-width: 20%;
    }

    .stock-card:hover {
    transform: translateY(-10px) scale(1.05) rotateX(10deg) rotateY(10deg);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.7);
    background-color: #000;
    /* التغيير إلى لون مختلف عند التمرير */
    text-decoration: none;
    color: #fff;
    border-color: #fff;
    }

    .stock-card .card-body {
    padding: 2rem 1rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }

    .stock-card i {
    font-size: 3rem;
    margin-bottom: 1rem;
    filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.5));
    }

    .stock-card .extra-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 1.5rem;
    color: rgba(255, 255, 255, 0.8);
    filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.7));
    }

    .stock-card h5.card-title {
    font-weight: 600;
    font-size: 1.25rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    }
    </style>

    <div class="background-overlay"></div>

    <div class="container-fluid mt-4 warehouse-container">
        <h1 class="text-center mb-4">التنقل الرئيسي للمخزون</h1>

        <div class="row justify-content-center">
            @php
                $links = [
                    ['route' => 'storeitems.index', 'label' => 'عناصر المتجر', 'image' => 'makhzan2.jpeg'],
                    ['route' => 'storeallitemsprices.index', 'label' => 'أسعار جميع العناصر', 'image' => 'khazna.jpeg'],
                    [
                        'route' => 'storestartotheritem.index',
                        'label' => 'بدء عنصر آخر',
                        'image' => 'newitems.jpeg',
                    ],
                    ['route' => 'storeinventorytable.index', 'label' => 'جدول الجرد', 'image' => 'makhzan.png'],
                    ['route' => 'storekhazina.index', 'label' => 'الخزينة', 'image' => 'khazna.jpeg'],
                    ['route' => 'storeotherstorage.index', 'label' => 'تخزين آخر', 'image' => 'makhzan3.png'],
                    ['route' => 'storeothersupplier.index', 'label' => 'مورد آخر', 'image' => 'masrofasnaf.jpeg'],
                    [
                        'route' => 'storestartotherfatora.index',
                        'label' => 'بدء فاتورة أخرى',
                        'image' => 'fatora1.jpeg',
                    ],
                    ['route' => 'storehadbackpurchase.index', 'label' => 'إرجاع شراء', 'image' => 'returnitems.png'],
                    ['route' => 'storepurchase.index', 'label' => 'شراء', 'image' => 'moshtriat.jpeg'],
                    [
                        'route' => 'storepurchasesfatora.index',
                        'label' => 'فاتورة المشتريات',
                        'image' => 'fatora2.jpeg',
                    ],
                    [
                        'route' => 'storepurchasesotherfatora.index',
                        'label' => 'فاتورة مشتريات أخرى',
                        'image' => 'fatora3.jpeg',
                    ],
                    [
                        'route' => 'storepurchasesothers.index',
                        'label' => 'مشتريات أخرى',
                        'image' => 'moshtriat.jpeg',
                    ],
                    [
                        'route' => 'storereturnpurchase.index',
                        'label' => 'إرجاع شراء',
                        'image' => 'returnitems.png',
                    ],
                    [
                        'route' => 'storereturnpurchasesitem.index',
                        'label' => 'إرجاع عنصر مشتريات',
                        'image' => 'returnitems.png',
                    ],
                    ['route' => 'storemasrofasnaffar3.index', 'label' => 'مصروف أصناف فرع', 'image' => 'masrofasnaf.jpeg'],
                    ['route' => 'storerasidayni.index', 'label' => 'رصيد عيني', 'image' => 'tahwel.jpeg'],
                    [
                        'route' => 'storerasidaynibar.index',
                        'label' => 'رصيد عيني بار',
                        'image' => 'khazna.jpeg',
                    ],
                    ['route' => 'storebranchsetting.index', 'label' => 'إعدادات الفرع', 'image' => 'setting.jpeg'],
                    ['route' => 'storetasnefsetting.index', 'label' => 'إعدادات التصنيف', 'image' => 'setting1.png'],
                    [
                        'route' => 'storeunitssetting.index',
                        'label' => 'إعدادات الوحدات',
                        'image' => 'setting.jpeg',
                    ],
                    ['route' => 'storetahwelat.index', 'label' => 'تحويلات', 'image' => 'tahwel.jpeg'],
                    ['route' => 'storetahwelatasnaf.index', 'label' => 'تحويلات الأصناف', 'image' => 'tahwel.jpeg'],
                ];
                $colors = ['#4A90E2', '#5A9BD5', '#6BA9E7', '#7CB7F9', '#8DC5FF', '#9ED3FF'];
            @endphp

            @foreach ($links as $index => $link)
                <div class="col-5th mb-3 d-flex justify-content-center">
                    <a href="{{ route($link['route']) }}" style="text-decoration: none;">
                        <div class="stock-card" style="background-color: {{ $colors[$index % count($colors)] }};">
                            <i class="fas fa-info-circle extra-icon"></i>
                            <div class="card-body text-center">
                                @php
                                    $imageParts = explode(' ', $link['image']);
                                    $imageName =
                                        count($imageParts) > 1
                                            ? str_replace('fa-', '', $imageParts[1])
                                            : $imageParts[0];
                                @endphp
                                <img src="{{ asset('assets/' . $imageName) }}" alt="{{ $link['label'] }}"
                                    class="mb-4" style="width:150px; height:140px; border-radius: 50%; background-color:transparent!important;">
                                <h5 class="card-title text-white">{{ $link['label'] }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
