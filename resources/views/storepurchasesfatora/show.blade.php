@extends('layouts.app')

@section('content')
    <h1>Purchases Fatora Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $purchasesfatora->fatora_number }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $purchasesfatora->date }}</p>
            <p class="card-text"><strong>Supplier Name:</strong> {{ $purchasesfatora->supplier_name }}</p>
            <p class="card-text"><strong>Total Amount:</strong> {{ $purchasesfatora->total_amount }}</p>
            <a href="{{ route('storepurchasesfatora.edit', $purchasesfatora->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storepurchasesfatora.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
