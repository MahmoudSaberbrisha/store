@extends('layouts.app')

@section('content')
    <h1>Inventory Record Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $inventory->item_name }}</h5>
            <p class="card-text"><strong>Item Code:</strong> {{ $inventory->item_code }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
            <p class="card-text"><strong>Unit:</strong> {{ $inventory->unit }}</p>
            <p class="card-text"><strong>Last Updated:</strong> {{ $inventory->updated_at }}</p>
            <a href="{{ route('storeinventorytable.edit', $inventory->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storeinventorytable.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
