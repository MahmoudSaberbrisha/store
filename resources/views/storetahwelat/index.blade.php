@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tahwelat</h1>
        <a href="{{ route('storetahwelat.create') }}" class="btn btn-primary">Add New Tahwelat</a>
    </div>

    <div class="row">
        @foreach ($tahwelats as $tahwelat)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $tahwelat->rkm }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $tahwelat->id }}</div>
                            <div class="col-6"><strong>Order Date:</strong> {{ $tahwelat->order_date }}</div>
                            <div class="col-6"><strong>Order Date AR:</strong> {{ $tahwelat->order_date_ar }}</div>
                            <div class="col-6"><strong>Order Time:</strong> {{ $tahwelat->order_time }}</div>
                            <div class="col-6"><strong>From Storage:</strong> {{ $tahwelat->from_storage }}</div>
                            <div class="col-6"><strong>To Storage:</strong> {{ $tahwelat->to_storage }}</div>
                            <div class="col-6"><strong>Reason:</strong> {{ $tahwelat->reason }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $tahwelat->publisher }}</div>
                            <div class="col-6"><strong>Publisher Name:</strong> {{ $tahwelat->publisher_name }}</div>
                            <div class="col-6"><strong>From Storage Name:</strong> {{ $tahwelat->from_storage_n }}</div>
                            <div class="col-6"><strong>To Storage Name:</strong> {{ $tahwelat->to_storage_n }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storetahwelat.show', $tahwelat->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storetahwelat.edit', $tahwelat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storetahwelat.destroy', $tahwelat->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?');">
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
