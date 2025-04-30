@extends('layouts.app')

@section('content')
    <h1>Other Supplier Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $supplier->name }}</h5>
            <p class="card-text"><strong>Contact:</strong> {{ $supplier->contact }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $supplier->address }}</p>
            <a href="{{ route('storeothersupplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storeothersupplier.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
