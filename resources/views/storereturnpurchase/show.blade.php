@extends('layouts.app')

@section('content')
    <h1>Return Purchase Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $return->id }}
    </div>
    <div class="mb-3">
        <strong>Fatora Code Purchases:</strong> {{ $return->fatora_code_purchases }}
    </div>
    <div class="mb-3">
        <strong>Total Price:</strong> {{ $return->total_price }}
    </div>
    <div class="mb-3">
        <strong>Date:</strong> {{ $return->date }}
    </div>
    <div class="mb-3">
        <strong>Date Ar:</strong> {{ $return->date_ar ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $return->publisher }}
    </div>
    <div class="mb-3">
        <strong>Publisher Name:</strong> {{ $return->publisher_name ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Supplier Code:</strong> {{ $return->supplier_code }}
    </div>

    <a href="{{ route('storereturnpurchase.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storereturnpurchase.edit', $return->id) }}" class="btn btn-primary">Edit</a>
@endsection
