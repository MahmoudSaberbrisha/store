@extends('layouts.app')

@section('content')
    <h1>إضافة فاتورة مشتريات جديدة</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storepurchasesfatora.store') }}" method="POST">
        @csrf
        <div class="row">
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
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fatora_date" class="form-label">تاريخ الفاتورة</label>
                <input type="date" class="form-control" id="fatora_date" name="fatora_date" value="{{ old('fatora_date') }}">
            </div>
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
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fatora_cost_before_discount" class="form-label">تكلفة الفاتورة قبل الخصم</label>
                <input type="number" step="0.01" class="form-control" id="fatora_cost_before_discount"
                    name="fatora_cost_before_discount" required value="{{ old('fatora_cost_before_discount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="discount" class="form-label">الخصم</label>
                <input type="number" step="0.01" class="form-control" id="discount" name="discount"
                    value="{{ old('discount') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fatora_cost_after_discount" class="form-label">تكلفة الفاتورة بعد الخصم</label>
                <input type="number" step="0.01" class="form-control" id="fatora_cost_after_discount"
                    name="fatora_cost_after_discount" required readonly value="{{ old('fatora_cost_after_discount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="paid_type" class="form-label">نوع الدفع</label>
                <select class="form-select" id="paid_type" name="paid_type" required>
                    <option value="">اختر نوع الدفع</option>
                    <option value="1" {{ old('paid_type') == '1' ? 'selected' : '' }}>كاش</option>
                    <option value="2" {{ old('paid_type') == '2' ? 'selected' : '' }}>فيزا</option>
                    <option value="3" {{ old('paid_type') == '3' ? 'selected' : '' }}>انستاباي</option>
                    <option value="4" {{ old('paid_type') == '4' ? 'selected' : '' }}>فودافون كاش</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="box_name" class="form-label">اسم الصندوق</label>
                <input type="number" class="form-control" id="box_name" name="box_name" required
                    value="{{ old('box_name') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="paid" class="form-label">المبلغ المدفوع</label>
                <input type="number" step="0.01" class="form-control" id="paid" name="paid" required
                    value="{{ old('paid') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="remain" class="form-label">المبلغ المتبقي</label>
                <input type="number" step="0.01" class="form-control" id="remain" name="remain" required readonly
                    value="{{ old('remain') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="byan" class="form-label">البيان</label>
                <input type="text" class="form-control" id="byan" name="byan" value="{{ old('byan') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date" class="form-label">التاريخ (طابع زمني)</label>
                <input type="date" class="form-control" id="date" name="date" required readonly
                    value="{{ old('date', $currentTimestamp ?? '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date_s" class="form-label">التاريخ (طابع زمني مختصر)</label>
                <input type="date" class="form-control" id="date_s" name="date_s" required readonly
                    value="{{ old('date_s', $currentTimestampShort ?? '') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">الناشر</label>
                <select class="form-select" id="publisher" name="publisher" required>
                    <option value="">اختر الناشر</option>
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ old('publisher') == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name ?? $publisher->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="had_back" class="form-label">هل تم الإرجاع</label>
                <select class="form-select" id="had_back" name="had_back" required>
                    <option value="">اختر الإجابة</option>
                    <option value="1" {{ old('had_back') == '1' ? 'selected' : '' }}>نعم</option>
                    <option value="0" {{ old('had_back') == '0' ? 'selected' : '' }}>لا</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sarf_far3_pill_num" class="form-label">رقم سند الصرف الفرعي</label>
                <input type="text" class="form-control" id="sarf_far3_pill_num" name="sarf_far3_pill_num" readonly
                    value="{{ old('sarf_far3_pill_num', $nextSarfNum ?? '') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">إضافة فاتورة مشتريات</button>
        <a href="{{ route('storepurchasesfatora.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const beforeDiscountInput = document.getElementById('fatora_cost_before_discount');
            const discountInput = document.getElementById('discount');
            const afterDiscountInput = document.getElementById('fatora_cost_after_discount');
            const paidInput = document.getElementById('paid');
            const remainInput = document.getElementById('remain');

            function calculateAfterDiscount() {
                const beforeDiscount = parseFloat(beforeDiscountInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;
                const afterDiscount = beforeDiscount - discount;
                afterDiscountInput.value = afterDiscount.toFixed(2);
                calculateRemain();
            }

            function calculateRemain() {
                const afterDiscount = parseFloat(afterDiscountInput.value) || 0;
                const paid = parseFloat(paidInput.value) || 0;
                const remain = afterDiscount - paid;
                remainInput.value = remain.toFixed(2);
            }

            beforeDiscountInput.addEventListener('input', calculateAfterDiscount);
            discountInput.addEventListener('input', calculateAfterDiscount);
            paidInput.addEventListener('input', calculateRemain);
        });
    </script>
@endsection
