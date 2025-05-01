@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">إضافة مرتجع شراء جديد</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storereturnpurchase.store') }}" method="POST" class="p-4 border rounded shadow-sm">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fatora_code_purchases" class="form-label">كود فاتورة المشتريات</label>
                <select class="form-select form-control-3d" id="fatora_code_purchases" name="fatora_code_purchases" required>
                    <option value="">اختر كود الفاتورة</option>
                    @foreach ($purchaseInvoiceCodes as $code)
                        <option value="{{ $code->fatora_code }}"
                            {{ old('fatora_code_purchases') == $code->fatora_code ? 'selected' : '' }}>
                            {{ $code->fatora_code }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="total_price" class="form-label">إجمالي السعر</label>
                <input type="number" step="0.01" class="form-control form-control-3d" id="total_price"
                    name="total_price" required value="{{ old('total_price') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date" class="form-label">التاريخ</label>
                <input type="date" class="form-control form-control-3d" id="date" name="date" required
                    value="{{ old('date') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date_ar" class="form-label">التاريخ بالعربية</label>
                <input type="text" class="form-control form-control-3d" id="date_ar" name="date_ar"
                    value="{{ old('date_ar') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">الناشر</label>
                <select class="form-select form-control-3d" id="publisher" name="publisher" required>
                    <option value="">اختر الناشر</option>
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}" {{ old('publisher') == $publisher->id ? 'selected' : '' }}>
                            {{ $publisher->name ?? ($publisher->email ?? $publisher->id) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="publisher_name" class="form-label">كود الناشر</label>
                <input type="text" class="form-control form-control-3d" id="publisher_name" name="publisher_name"
                    value="{{ old('publisher_name') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
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
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-primary">إضافة مرتجع شراء</button>
            <a href="{{ route('storereturnpurchase.index') }}" class="btn btn-secondary">إلغاء</a>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fatoraCodeSelect = document.getElementById('fatora_code_purchases');
            const totalPriceInput = document.getElementById('total_price');
            const publisherNameInput = document.getElementById('publisher_name');

            function fetchPaidValue() {
                const selectedCode = fatoraCodeSelect.value;
                if (!selectedCode) {
                    totalPriceInput.value = '';
                    publisherNameInput.value = '';
                    return;
                }
                fetch(`/storereturnpurchase/paid-value/${selectedCode}`)
                    .then(response => response.json())
                    .then(data => {
                        totalPriceInput.value = data.paid ?? 0;
                        publisherNameInput.value = data.publisher_name ?? '';
                    })
                    .catch(() => {
                        totalPriceInput.value = 0;
                        publisherNameInput.value = '';
                    });
            }

            fatoraCodeSelect.addEventListener('change', fetchPaidValue);
            fatoraCodeSelect.addEventListener('click', fetchPaidValue);
        });
    </script>
@endsection
