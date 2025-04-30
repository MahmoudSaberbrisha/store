@extends('layouts.app')

@section('content')
    <h1>Purchase Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $purchase->purchase_number }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $purchase->date }}</p>
            <p class="card-text"><strong>Supplier Name:</strong> {{ $purchase->supplier_name }}</p>
            <p class="card-text"><strong>Total Amount:</strong> {{ $purchase->total_amount }}</p>
            <a href="{{ route('storepurchase.edit', $purchase->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storepurchase.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
