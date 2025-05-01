@extends('layouts.app')

@section('content')
    <h1>إضافة عملية شراء مرتجعة جديدة</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storehadbackpurchase.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="main_branch_id_fk" class="form-label">رقم الفرع الرئيسي</label>
                <select class="form-select" id="main_branch_id_fk" name="main_branch_id_fk" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('main_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->name ?? $branch->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sub_branch_id_fk" class="form-label">رقم الفرع الفرعي</label>
                <select class="form-select" id="sub_branch_id_fk" name="sub_branch_id_fk" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('sub_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->name ?? $branch->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="supplier_code" class="form-label">كود المورد</label>
                <select class="form-select" id="supplier_code" name="supplier_code" required>
                    <option value="">اختر المورد</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->code }}" {{ old('supplier_code') == $supplier->code ? 'selected' : '' }}>
                            {{ $supplier->name ?? $supplier->code }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="fatora_code" class="form-label">كود الفاتورة</label>
                <select class="form-select" id="fatora_code" name="fatora_code" required>
                    <option value="">اختر كود الفاتورة</option>
                    @foreach ($invoices as $invoice)
                        <option value="{{ $invoice->pill_num }}" data-amount-buy="{{ $invoice->all_amount }}"
                            {{ old('fatora_code') == $invoice->pill_num ? 'selected' : '' }}>
                            {{ $invoice->pill_num }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="product_code" class="form-label">كود المنتج</label>
                <input type="number" class="form-control" id="product_code" name="product_code" required
                    value="{{ old('product_code') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="amount_buy" class="form-label">كمية الشراء</label>
                <input type="number" step="0.01" class="form-control" id="amount_buy" name="amount_buy" required
                    value="{{ old('amount_buy') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="all_cost_buy" class="form-label">إجمالي تكلفة الشراء</label>
                <input type="number" step="0.01" class="form-control" id="all_cost_buy" name="all_cost_buy" required
                    value="{{ old('all_cost_buy') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="one_price_sell" class="form-label">سعر البيع للوحدة</label>
                <input type="number" step="0.01" class="form-control" id="one_price_sell" name="one_price_sell" required
                    value="{{ old('one_price_sell') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="hadback_amount" class="form-label">كمية المرتجع</label>
                <input type="number" class="form-control" id="hadback_amount" name="hadback_amount" required
                    value="{{ old('hadback_amount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date" class="form-label">التاريخ (timestamp)</label>
                <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date_s" class="form-label">التاريخ (timestamp) S</label>
                <input type="date" class="form-control" id="date_s" name="date_s" required value="{{ old('date_s') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">رقم الناشر</label>
                <select class="form-select" id="publisher" name="publisher" required>
                    <option value="">اختر الناشر</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('publisher') == $user->id ? 'selected' : '' }}>
                            {{ $user->name ?? $user->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">إضافة عملية شراء مرتجعة</button>
        <a href="{{ route('storehadbackpurchase.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fatoraSelect = document.getElementById('fatora_code');
            const amountBuyInput = document.getElementById('amount_buy');

            fatoraSelect.addEventListener('change', function() {
                const selectedOption = fatoraSelect.options[fatoraSelect.selectedIndex];
                const amountBuy = selectedOption.getAttribute('data-amount-buy');

                if (amountBuy) {
                    amountBuyInput.value = amountBuy;
                } else {
                    amountBuyInput.value = '';
                }
            });
        });
    </script>
@endsection
