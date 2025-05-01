@extends('layouts.app')

@section('content')
    <h1>Edit Return Purchase</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storereturnpurchase.update', $return->id) }}" method="POST" class="p-4 border rounded shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fatora_code_purchases" class="form-label">Fatora Code Purchases</label>
            <input type="number" class="form-control" id="fatora_code_purchases" name="fatora_code_purchases" required
                value="{{ old('fatora_code_purchases', $return->fatora_code_purchases) }}">
        </div>
        <div class="mb-3">
            <label for="total_price" class="form-label">Total Price</label>
            <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" required
                value="{{ old('total_price', $return->total_price) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required
                value="{{ old('date', $return->date) }}">
        </div>
        <div class="mb-3">
            <label for="date_ar" class="form-label">Date Ar</label>
            <input type="text" class="form-control" id="date_ar" name="date_ar"
                value="{{ old('date_ar', $return->date_ar) }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="number" class="form-control" id="publisher" name="publisher" required
                value="{{ old('publisher', $return->publisher) }}">
        </div>
        <div class="mb-3">
            <label for="publisher_name" class="form-label">Publisher Name</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name"
                value="{{ old('publisher_name', $return->publisher_name) }}">
        </div>
        <div class="mb-3">
            <label for="supplier_code" class="form-label">Supplier Code</label>
            <input type="number" class="form-control" id="supplier_code" name="supplier_code" required
                value="{{ old('supplier_code', $return->supplier_code) }}">
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-primary">Update Return Purchase</button>
            <a href="{{ route('storereturnpurchase.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
