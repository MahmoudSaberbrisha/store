@extends('layouts.app')

@section('content')
    <h1>Tahwelat Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $tahwelat->id }}
    </div>
    <div class="mb-3">
        <strong>Rkm:</strong> {{ $tahwelat->rkm }}
    </div>
    <div class="mb-3">
        <strong>Order Date:</strong> {{ $tahwelat->order_date }}
    </div>
    <div class="mb-3">
        <strong>Order Date AR:</strong> {{ $tahwelat->order_date_ar }}
    </div>
    <div class="mb-3">
        <strong>Order Time:</strong> {{ $tahwelat->order_time }}
    </div>
    <div class="mb-3">
        <strong>From Storage:</strong> {{ $tahwelat->from_storage }}
    </div>
    <div class="mb-3">
        <strong>To Storage:</strong> {{ $tahwelat->to_storage }}
    </div>
    <div class="mb-3">
        <strong>Reason:</strong> {{ $tahwelat->reason }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $tahwelat->publisher }}
    </div>
    <div class="mb-3">
        <strong>Publisher Name:</strong> {{ $tahwelat->publisher_name }}
    </div>
    <div class="mb-3">
        <strong>From Storage Name:</strong> {{ $tahwelat->from_storage_n }}
    </div>
    <div class="mb-3">
        <strong>To Storage Name:</strong> {{ $tahwelat->to_storage_n }}
    </div>

    <a href="{{ route('storetahwelat.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storetahwelat.edit', $tahwelat->id) }}" class="btn btn-primary">Edit</a>
@endsection
