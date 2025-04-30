@extends('layouts.app')

@section('content')
    <h1>Rasid Ayni Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $rasid->description }}</h5>
            <p class="card-text"><strong>Amount:</strong> {{ $rasid->amount }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $rasid->date }}</p>
            <a href="{{ route('storerasidayni.edit', $rasid->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storerasidayni.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
