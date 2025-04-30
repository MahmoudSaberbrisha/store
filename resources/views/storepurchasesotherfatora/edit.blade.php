@extends('layouts.app')

@section('content')
    <h1>Edit Purchases Other Fatora</h1>

    <form action="{{ route('storepurchasesotherfatora.update', $purchasesotherfatora->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fatora_number" class="form-label">Fatora Number</label>
            <input type="text" class="form-control" id="fatora_number" name="fatora_number" required maxlength="50"
                value="{{ old('fatora_number', $purchasesotherfatora->fatora_number) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required
                value="{{ old('date', $purchasesotherfatora->date) }}">
        </div>
        <div class="mb-3">
            <label for="supplier_name" class="form-label">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" maxlength="100"
                value="{{ old('supplier_name', $purchasesotherfatora->supplier_name) }}">
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount"
                value="{{ old('total_amount', $purchasesotherfatora->total_amount) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Purchases Other Fatora</button>
        <a href="{{ route('storepurchasesotherfatora.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
