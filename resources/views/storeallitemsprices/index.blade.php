@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store All Items Prices</h1>
        <a href="{{ route('storeallitemsprices.create') }}" class="btn btn-primary">Add New Price Record</a>
    </div>

    <div class="row">
        @foreach ($prices as $price)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $price->publisher_name }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $price->id }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $price->publisher }}</div>
                            <div class="col-6"><strong>Item Code:</strong> {{ $price->sanf_code }}</div>
                            <div class="col-6"><strong>Item Name:</strong> {{ $price->sanf_name }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $price->date_ar }}</div>
                            <div class="col-6"><strong>Update Time:</strong> {{ $price->update_time }}</div>
                            <div class="col-6"><strong>New Price:</strong> {{ $price->new_price }}</div>
                            <div class="col-6"><strong>Old Price:</strong> {{ $price->old_price }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storeallitemsprices.show', $price->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storeallitemsprices.edit', $price->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeallitemsprices.destroy', $price->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
