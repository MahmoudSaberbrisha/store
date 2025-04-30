@extends('layouts.app')

@section('content')
    <h1>Tahwelat Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tahwelat->description }}</h5>
            <p class="card-text"><strong>Amount:</strong> {{ $tahwelat->amount }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $tahwelat->date }}</p>
            <a href="{{ route('storetahwelat.edit', $tahwelat->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storetahwelat.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
