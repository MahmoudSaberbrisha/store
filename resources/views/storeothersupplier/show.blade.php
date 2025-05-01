@extends('layouts.app')

@section('content')
    <h1>Other Supplier Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $supplier->name }}</h5>
            <p class="card-text"><strong>Code:</strong> {{ $supplier->code }}</p>
            <p class="card-text"><strong>Supplier Address:</strong> {{ $supplier->supplier_address }}</p>
            <p class="card-text"><strong>Supplier Phone:</strong> {{ $supplier->supplier_phone }}</p>
            <p class="card-text"><strong>Supplier Fax:</strong> {{ $supplier->supplier_fax }}</p>
            <p class="card-text"><strong>Accountant Name:</strong> {{ $supplier->accountant_name }}</p>
            <p class="card-text"><strong>Accountant Telephone:</strong> {{ $supplier->accountant_telephone }}</p>
            <p class="card-text"><strong>Supplier Dayen:</strong> {{ $supplier->supplier_dayen }}</p>

            <a href="{{ route('storeothersupplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storeothersupplier.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
