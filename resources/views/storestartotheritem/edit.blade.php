@extends('layouts.app')

@section('content')
    <h1>Edit Store Start Other Item</h1>

    <form action="{{ route('storestartotheritem.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="50"
                value="{{ old('name', $item->name) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_code" class="form-label">Item Code</label>
            <input type="text" class="form-control" id="sanf_code" name="sanf_code" required maxlength="50"
                value="{{ old('sanf_code', $item->sanf_code) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_type" class="form-label">Item Type</label>
            <input type="text" class="form-control" id="sanf_type" name="sanf_type" maxlength="50"
                value="{{ old('sanf_type', $item->sanf_type) }}">
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit" required maxlength="50"
                value="{{ old('unit', $item->unit) }}">
        </div>
        <div class="mb-3">
            <label for="sale_price" class="form-label">Sale Price</label>
            <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price"
                value="{{ old('sale_price', $item->sale_price) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Item</button>
        <a href="{{ route('storestartotheritem.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
