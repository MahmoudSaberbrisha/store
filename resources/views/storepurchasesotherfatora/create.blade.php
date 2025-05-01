@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">إضافة فاتورة مشتريات أخرى جديدة</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storepurchasesotherfatora.store') }}" method="POST" class="p-4 border rounded shadow-sm">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="main_branch_id_fk" class="form-label">رقم الفرع الرئيسي</label>
                <select class="form-select form-control-3d" id="main_branch_id_fk" name="main_branch_id_fk" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('main_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title ?? $branch->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="sub_branch_id_fk" class="form-label">رقم الفرع الفرعي</label>
                <select class="form-select form-control-3d" id="sub_branch_id_fk" name="sub_branch_id_fk" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('sub_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title ?? $branch->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="fatora_code" class="form-label">كود الفاتورة</label>
                <input type="number" class="form-control form-control-3d" id="fatora_code" name="fatora_code" required
                    value="{{ old('fatora_code', $nextFatoraCode ?? '') }}">
            </div>
            <div class="col-md-4">
                <label for="fatora_date" class="form-label">تاريخ الفاتورة</label>
                <input type="date" class="form-control form-control-3d" id="fatora_date" name="fatora_date"
                    value="{{ old('fatora_date') }}">
            </div>
            <div class="col-md-4">
                <label for="fatora_print_date" class="form-label">تاريخ طباعة الفاتورة</label>
                <input type="date" class="form-control form-control-3d" id="fatora_print_date" name="fatora_print_date"
                    value="{{ old('fatora_print_date') }}">
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="supplier_code" class="form-label">كود المورد</label>
                <select class="form-select form-control-3d" id="supplier_code" name="supplier_code" required>
                    <option value="">اختر المورد</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->code }}"
                            {{ old('supplier_code') == $supplier->code ? 'selected' : '' }}>
                            {{ $supplier->name ?? $supplier->code }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="barcode" class="form-label">الباركود</label>
                <input type="text" class="form-control form-control-3d" id="barcode" name="barcode"
                    value="{{ old('barcode') }}">
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="box_name" class="form-label">اسم الصندوق</label>
                <select class="form-select form-control-3d" id="box_name" name="box_name" onchange="updateBoxId()">
                    <option value="">اختر اسم الصندوق</option>
                    @foreach ($boxes as $box)
                        <option value="{{ $box->id }}" data-box-id="{{ $box->id }}"
                            {{ old('box_name') == $box->id ? 'selected' : '' }}>
                            {{ $box->name ?? $box->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="box_id_fk" class="form-label">رقم الصندوق</label>
                <input type="number" class="form-control form-control-3d" id="box_id_fk" name="box_id_fk"
                    value="{{ old('box_id_fk') }}" >
            </div>
        </div>

        <script>
            function updateBoxId() {
                var boxNameSelect = document.getElementById('box_name');
                var boxIdInput = document.getElementById('box_id_fk');
                var selectedOption = boxNameSelect.options[boxNameSelect.selectedIndex];
                var boxId = selectedOption.getAttribute('data-box-id') || '';
                boxIdInput.value = boxId;
            }
            // Call once on page load to set initial value
            window.onload = function() {
                updateBoxId();
            };
        </script>

        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="fatora_cost_before_discount" class="form-label">تكلفة الفاتورة قبل الخصم</label>
                <input type="number" step="0.01" class="form-control form-control-3d" id="fatora_cost_before_discount"
                    name="fatora_cost_before_discount" required value="{{ old('fatora_cost_before_discount') }}">
            </div>
            <div class="col-md-4">
                <label for="discount" class="form-label">الخصم</label>
                <input type="number" step="0.01" class="form-control form-control-3d" id="discount" name="discount"
                    value="{{ old('discount') }}">
            </div>
            <div class="col-md-4">
                <label for="fatora_cost_after_discount" class="form-label">تكلفة الفاتورة بعد الخصم</label>
                <input type="number" step="0.01" class="form-control form-control-3d"
                    id="fatora_cost_after_discount" name="fatora_cost_after_discount" required
                    value="{{ old('fatora_cost_after_discount') }}">
            </div>
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-primary">إضافة فاتورة مشتريات أخرى</button>
            <a href="{{ route('storepurchasesotherfatora.index') }}" class="btn btn-secondary">إلغاء</a>
        </div>
    </form>

    <style>
        .form-control-3d {
            border: 1.5px solid #ced4da;
            border-radius: 8px;
            box-shadow: none;
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            color: #2c3e50;
            background-color: #eaf2f8;
        }

        .form-control-3d:focus {
            box-shadow: 0 0 8px 2px #3498db;
            border-color: #2980b9;
            background-color: #ffffff;
            outline: none;
        }

        .form-select.form-control-3d {
            padding-right: 2rem;
            padding-left: 0.75rem;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%233498db' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 8px 10px;
        }

        label.form-label {
            font-weight: 600;
            font-size: 1.1rem;
            color: #2c3e50;
        }
    </style>
@endsection
