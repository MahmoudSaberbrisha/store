@extends('layouts.app')

@section('content')
    <h1>Start Other Fatora Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $fatora->fatora_number }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $fatora->date }}</p>
            <p class="card-text"><strong>Supplier Name:</strong> {{ $fatora->supplier_name }}</p>
            <p class="card-text"><strong>Total Amount:</strong> {{ $fatora->total_amount }}</p>
            <a href="{{ route('storestartotherfatora.edit', $fatora->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storestartotherfatora.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
