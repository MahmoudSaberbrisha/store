@extends('layouts.app')

@section('content')
    <h1>Store Item Price Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Publisher: {{ $price->publisher_name }} (ID: {{ $price->publisher }})</h5>
            <p class="card-text"><strong>Item Code:</strong> {{ $price->sanf_code }}</p>
            <p class="card-text"><strong>Item Name:</strong> {{ $price->sanf_name }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $price->date_ar }}</p>
            <p class="card-text"><strong>Update Time:</strong> {{ $price->update_time }}</p>
            <p class="card-text"><strong>New Price:</strong> {{ $price->new_price }}</p>
            <p class="card-text"><strong>Old Price:</strong> {{ $price->old_price }}</p>
            <a href="{{ route('storeallitemsprices.edit', $price->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storeallitemsprices.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
