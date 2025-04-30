@extends('layouts.app')

@section('content')
    <h1>Tahwelat Asnaf Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tahwelatasnaf->description }}</h5>
            <p class="card-text"><strong>Amount:</strong> {{ $tahwelatasnaf->amount }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $tahwelatasnaf->date }}</p>
            <a href="{{ route('storetahwelatasnaf.edit', $tahwelatasnaf->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storetahwelatasnaf.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
