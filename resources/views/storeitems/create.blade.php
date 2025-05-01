@extends('layouts.app')

@section('content')
    <h1>إضافة عنصر جديد للمخزن</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storeitems.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">اسم العنصر</label>
                <input type="text" class="form-control" id="name" name="name" required maxlength="50"
                    value="{{ old('name') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="sanf_code" class="form-label">كود العنصر</label>
                <input type="text" class="form-control" id="sanf_code" name="sanf_code" required maxlength="50"
                    value="{{ old('sanf_code') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="main_branch_id_fk" class="form-label">الفرع الرئيسي</label>
                <select class="form-control text-black" id="main_branch_id_fk" name="main_branch_id_fk" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($branches as $branch)
                        <option class="text-black!important" value="{{ $branch->id }}"
                            {{ old('main_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title ?? 'فرع بدون اسم' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sub_branch_id_fk" class="form-label">الفرع الفرعي</label>
                <select class="form-control text-black" id="sub_branch_id_fk" name="sub_branch_id_fk" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($branches as $branch)
                        <option class="text-black" value="{{ $branch->id }}"
                            {{ old('sub_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id_from" class="form-label">الرقم من</label>
                <input type="number" class="form-control" id="id_from" name="id_from" value="{{ old('id_from') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="unit" class="form-label">الوحدة</label>
                <input type="text" class="form-control" id="unit" name="unit" required maxlength="50"
                    value="{{ old('unit') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="limit_order" class="form-label">حد الطلب</label>
                <input type="text" class="form-control" id="limit_order" name="limit_order" maxlength="50"
                    value="{{ old('limit_order') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="min_limit" class="form-label">الحد الأدنى</label>
                <input type="text" class="form-control" id="min_limit" name="min_limit" maxlength="50"
                    value="{{ old('min_limit') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="all_buy_cost" class="form-label">إجمالي تكلفة الشراء</label>
                <input type="number" step="0.01" class="form-control" id="all_buy_cost" name="all_buy_cost"
                    value="{{ old('all_buy_cost') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="all_amount" class="form-label">إجمالي الكمية</label>
                <input type="text" class="form-control" id="all_amount" name="all_amount" maxlength="50"
                    value="{{ old('all_amount') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="one_buy_cost" class="form-label">تكلفة شراء واحدة</label>
                <input type="number" step="0.01" class="form-control" id="one_buy_cost" name="one_buy_cost"
                    value="{{ old('one_buy_cost') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="customer_price_sale" class="form-label">سعر البيع للعميل</label>
                <input type="number" step="0.01" class="form-control" id="customer_price_sale"
                    name="customer_price_sale" value="{{ old('customer_price_sale') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="first_balance_period" class="form-label">رصيد الفترة الأولى</label>
                <input type="text" class="form-control" id="first_balance_period" name="first_balance_period"
                    maxlength="50" value="{{ old('first_balance_period') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="past_amount" class="form-label">الكمية السابقة</label>
                <input type="number" step="0.01" class="form-control" id="past_amount" name="past_amount"
                    value="{{ old('past_amount') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="cost_past_amount" class="form-label">تكلفة الكمية السابقة</label>
                <input type="text" class="form-control" id="cost_past_amount" name="cost_past_amount" maxlength="50"
                    value="{{ old('cost_past_amount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="sanf_type_gym" class="form-label">نوع الصنف</label>
                <input type="number" class="form-control" id="sanf_type_gym" name="sanf_type_gym"
                    value="{{ old('sanf_type_gym') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sale_price" class="form-label">سعر البيع</label>
                <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price"
                    value="{{ old('sale_price') }}">
            </div>
        </div>
        <center>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">إضافة العنصر</button>
                <a href="{{ route('storeitems.index') }}" class="btn btn-secondary">إلغاء</a>
            </div>
        </div>
        </center>
    </form>
@endsection
