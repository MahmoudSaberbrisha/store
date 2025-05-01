@extends('layouts.app')

@section('content')
    <h1>تعديل مورد آخر</h1>

    <form action="{{ route('storeothersupplier.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="code" class="form-label">الكود</label>
            <input type="number" class="form-control @error('code') is-invalid @enderror" id="code" name="code"
                required value="{{ old('code', $supplier->code) }}">
            @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">اسم المورد</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                required maxlength="255" value="{{ old('name', $supplier->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="supplier_address" class="form-label">عنوان المورد</label>
            <textarea class="form-control @error('supplier_address') is-invalid @enderror" id="supplier_address"
                name="supplier_address" rows="3">{{ old('supplier_address', $supplier->supplier_address) }}</textarea>
            @error('supplier_address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="supplier_phone" class="form-label">هاتف المورد</label>
            <input type="text" class="form-control @error('supplier_phone') is-invalid @enderror" id="supplier_phone"
                name="supplier_phone" maxlength="50" value="{{ old('supplier_phone', $supplier->supplier_phone) }}">
            @error('supplier_phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="supplier_fax" class="form-label">فاكس المورد</label>
            <input type="text" class="form-control @error('supplier_fax') is-invalid @enderror" id="supplier_fax"
                name="supplier_fax" maxlength="50" value="{{ old('supplier_fax', $supplier->supplier_fax) }}">
            @error('supplier_fax')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="accountant_name" class="form-label">اسم المحاسب</label>
            <input type="text" class="form-control @error('accountant_name') is-invalid @enderror" id="accountant_name"
                name="accountant_name" maxlength="255" value="{{ old('accountant_name', $supplier->accountant_name) }}">
            @error('accountant_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="accountant_telephone" class="form-label">هاتف المحاسب</label>
            <input type="text" class="form-control @error('accountant_telephone') is-invalid @enderror"
                id="accountant_telephone" name="accountant_telephone" maxlength="50"
                value="{{ old('accountant_telephone', $supplier->accountant_telephone) }}">
            @error('accountant_telephone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="supplier_dayen" class="form-label">ديون المورد</label>
            <input type="number" step="any" class="form-control @error('supplier_dayen') is-invalid @enderror"
                id="supplier_dayen" name="supplier_dayen" value="{{ old('supplier_dayen', $supplier->supplier_dayen) }}">
            @error('supplier_dayen')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">تحديث المورد</button>
        <a href="{{ route('storeothersupplier.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>
@endsection
