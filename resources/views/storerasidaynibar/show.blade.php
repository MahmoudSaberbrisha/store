@extends('layouts.app')

@section('content')
    <h1>Rasid Ayni Bar Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $rasid->description }}</h5>
            <p class="card-text"><strong>Amount:</strong> {{ $rasid->amount }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $rasid->date }}</p>
            <a href="{{ route('storerasidaynibar.edit', $rasid->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storerasidaynibar.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
