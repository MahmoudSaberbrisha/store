@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Return Purchases</h1>
        <a href="{{ route('storereturnpurchase.create') }}" class="btn btn-primary">Add New Return Purchase</a>
    </div>

    <div class="row">
        @foreach ($returns as $return)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storereturnpurchase.show', $return->id) }}"
                            class="text-white text-decoration-none">
                            {{ $return->fatora_code_purchases }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $return->id }}</div>
                            <div class="col-6"><strong>Total Price:</strong> {{ $return->total_price }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $return->date }}</div>
                            <div class="col-6"><strong>Date Ar:</strong> {{ $return->date_ar ?? '' }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $return->publisher }}</div>
                            <div class="col-6"><strong>Publisher Name:</strong> {{ $return->publisher_name ?? '' }}</div>
                            <div class="col-6"><strong>Supplier Code:</strong> {{ $return->supplier_code }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storereturnpurchase.edit', $return->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storereturnpurchase.destroy', $return->id) }}" method="POST"
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
