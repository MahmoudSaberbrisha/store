@extends('layouts.app')

@section('content')
    <h1>Add New Hadback Purchase</h1>

    <form action="{{ route('storehadbackpurchase.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="purchase_number" class="form-label">Purchase Number</label>
            <input type="text" class="form-control" id="purchase_number" name="purchase_number" required maxlength="50"
                value="{{ old('purchase_number') }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
        </div>
        <div class="mb-3">
            <label for="supplier_name" class="form-label">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" maxlength="100"
                value="{{ old('supplier_name') }}">
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount"
                value="{{ old('total_amount') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Hadback Purchase</button>
        <a href="{{ route('storehadbackpurchase.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
