@extends('layouts.app')

@section('content')
    <h1>Edit Inventory Record</h1>

    <form action="{{ route('storeinventorytable.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="item_code" class="form-label">Item Code</label>
            <input type="text" class="form-control" id="item_code" name="item_code" required maxlength="50"
                value="{{ old('item_code', $inventory->item_code) }}">
        </div>
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name" required maxlength="100"
                value="{{ old('item_name', $inventory->item_name) }}">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required step="0.01"
                value="{{ old('quantity', $inventory->quantity) }}">
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit" required maxlength="50"
                value="{{ old('unit', $inventory->unit) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Inventory</button>
        <a href="{{ route('storeinventorytable.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
