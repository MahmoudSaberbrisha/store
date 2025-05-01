@extends('layouts.app')

@section('content')
    <h1>إضافة مصروف أصناف فرع جديد</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storemasrofasnaffar3.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="main_branch_fk" class="form-label">الفرع الرئيسي</label>
                <select class="form-control" id="main_branch_fk" name="main_branch_fk" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($mainBranches as $branch)
                        <option value="{{ $branch->id }}" {{ old('main_branch_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sub_branch_fk" class="form-label">الفرع الفرعي</label>
                <select class="form-control" id="sub_branch_fk" name="sub_branch_fk" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($subBranches as $branch)
                        <option value="{{ $branch->id }}" {{ old('sub_branch_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sarf_rkm" class="form-label">رقم الصرف</label>
                <input type="number" class="form-control" id="sarf_rkm" name="sarf_rkm" required readonly
                    value="{{ old('sarf_rkm', $nextSarfRkm) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="sarf_to" class="form-label">الصرف إلى</label>
                <input type="number" class="form-control" id="sarf_to" name="sarf_to" required
                    value="{{ old('sarf_to') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sanf_code" class="form-label">كود الصنف</label>
                <select class="form-control" id="sanf_code" name="sanf_code" required>
                    <option value="">اختر الصنف</option>
                    @foreach ($items as $item)
                        <option value="{{ $item->sanf_code }}"
                            {{ old('sanf_code') == $item->sanf_code ? 'selected' : '' }}>
                            {{ $item->sanf_code }} - {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="available_amount" class="form-label">الكمية المتاحة</label>
                <input type="number" class="form-control" id="available_amount" name="available_amount" required readonly
                    value="{{ old('available_amount') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sanf_amount" class="form-label">كمية الصنف</label>
                <input type="number" class="form-control" id="sanf_amount" name="sanf_amount" required
                    value="{{ old('sanf_amount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="one_price_sell" class="form-label">سعر البيع للوحدة</label>
                <input type="number" class="form-control" id="one_price_sell" name="one_price_sell" required
                    value="{{ old('one_price_sell') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date" class="form-label">التاريخ </label>
                <input type="date" class="form-control" id="date" name="date" required
                    value="{{ old('date') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date_ar" class="form-label">التاريخ بالعربي</label>
                <input type="text" class="form-control" id="date_ar" name="date_ar" value="{{ old('date_ar') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">الناشر</label>
                <select class="form-control" id="publisher" name="publisher" required>
                    <option value="">اختر الناشر</option>
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ old('publisher') == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="publisher_name" class="form-label"> اسم الناشر</label>
                <select class="form-control" id="publisher_name" name="publisher_name" required>
                    <option value="">اختر الناشر</option>
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ old('publisher') == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">إضافة مصروف أصناف فرع</button>
        <a href="{{ route('storemasrofasnaffar3.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sanfCodeInput = document.getElementById('sanf_code');
            const availableAmountInput = document.getElementById('available_amount');

            sanfCodeInput.addEventListener('change', function() {
                const sanfCode = this.value;
                if (!sanfCode) {
                    availableAmountInput.value = '';
                    return;
                }
                fetch(`/storemasrofasnaffar3/available-quantity/${sanfCode}`)
                    .then(response => response.json())
                    .then(data => {
                        availableAmountInput.value = data.available_amount ?? '';
                    })
                    .catch(() => {
                        availableAmountInput.value = '';
                    });
            });
        });
    </script>
@endsection
