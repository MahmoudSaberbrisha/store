@extends('layouts.app')

@section('content')
    <h1>Hadback Purchase Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $hadback->purchase_number }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $hadback->date }}</p>
            <p class="card-text"><strong>Supplier Name:</strong> {{ $hadback->supplier_name }}</p>
            <p class="card-text"><strong>Total Amount:</strong> {{ $hadback->total_amount }}</p>
            <a href="{{ route('storehadbackpurchase.edit', $hadback->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storehadbackpurchase.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
