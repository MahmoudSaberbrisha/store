@extends('layouts.app')

@section('content')
    <h1>Purchases Other Fatora Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $purchasesotherfatora->fatora_number }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $purchasesotherfatora->date }}</p>
            <p class="card-text"><strong>Supplier Name:</strong> {{ $purchasesotherfatora->supplier_name }}</p>
            <p class="card-text"><strong>Total Amount:</strong> {{ $purchasesotherfatora->total_amount }}</p>
            <a href="{{ route('storepurchasesotherfatora.edit', $purchasesotherfatora->id) }}"
                class="btn btn-warning">Edit</a>
            <a href="{{ route('storepurchasesotherfatora.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
