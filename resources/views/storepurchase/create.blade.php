@extends('layouts.app')

@section('content')
    <h1>إضافة عملية شراء جديدة</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storepurchase.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="marge3_num" class="form-label">رقم المرجع</label>
                <input type="text" class="form-control" id="marge3_num" name="marge3_num" maxlength="255" readonly
                    value="{{ old('marge3_num', $nextMarge3Num ?? '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="main_branch_id_fk" class="form-label">رقم الفرع الرئيسي</label>
                <select class="form-select" id="main_branch_id_fk" name="main_branch_id_fk" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('main_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title ?? $branch->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sub_branch_id_fk" class="form-label">رقم الفرع الفرعي</label>
                <select class="form-select" id="sub_branch_id_fk" name="sub_branch_id_fk" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('sub_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title ?? $branch->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sarf_rkm" class="form-label">رقم الصرف</label>
                <input type="text" class="form-control" id="sarf_rkm" name="sarf_rkm" maxlength="255" readonly
                    value="{{ old('sarf_rkm', $nextSarfRkm ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fatora_code" class="form-label">كود الفاتورة</label>
                <input type="number" class="form-control" id="fatora_code" name="fatora_code" required readonly
                    value="{{ old('fatora_code', $nextFatoraCode ?? '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="fatora_date" class="form-label">تاريخ الفاتورة</label>
                <input type="date" class="form-control" id="fatora_date" name="fatora_date"
                    value="{{ old('fatora_date') }}">
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
                <label for="product_code" class="form-label">كود المنتج</label>
                <select class="form-select" id="product_code" name="product_code" required>
                    <option value="">اختر المنتج</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->sanf_code }}"
                            {{ old('product_code') == $product->sanf_code ? 'selected' : '' }}>
                            {{ $product->name ?? $product->sanf_code }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="amount_buy" class="form-label">كمية الشراء</label>
                <input type="number" step="0.01" class="form-control" id="amount_buy" name="amount_buy" required
                    value="{{ old('amount_buy') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="all_cost_buy" class="form-label">إجمالي تكلفة الشراء</label>
                <input type="number" step="0.01" class="form-control" id="all_cost_buy" name="all_cost_buy" required
                    value="{{ old('all_cost_buy') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="one_price_sell" class="form-label">سعر البيع للوحدة</label>
                <input type="number" step="0.01" class="form-control" id="one_price_sell" name="one_price_sell" required
                    value="{{ old('one_price_sell') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date" class="form-label">التاريخ</label>
                <input type="date" class="form-control" id="date" name="date" required
                    value="{{ old('date', $currentDate ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date_s" class="form-label">التاريخ S</label>
                <input type="date" class="form-control" id="date_s" name="date_s" required
                    value="{{ old('date_s', $currentDate ?? '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">رقم الناشر</label>
                <select class="form-select" id="publisher" name="publisher" required>
                    <option value="">اختر الناشر</option>
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ old('publisher') == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name ?? $publisher->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sarf_far3_pill_num" class="form-label">رقم صرف الفرع</label>
                <input type="text" class="form-control" id="sarf_far3_pill_num" name="sarf_far3_pill_num"
                    maxlength="255" value="{{ old('sarf_far3_pill_num') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="old" class="form-label">قديم</label>
                <select class="form-select" id="old" name="old">
                    <option value="" {{ old('old') === null ? 'selected' : '' }}>لا شيء</option>
                    <option value="1" {{ old('old') === '1' ? 'selected' : '' }}>صحيح</option>
                    <option value="0" {{ old('old') === '0' ? 'selected' : '' }}>خطأ</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">إضافة عملية الشراء</button>
        <a href="{{ route('storepurchase.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>
@endsection
