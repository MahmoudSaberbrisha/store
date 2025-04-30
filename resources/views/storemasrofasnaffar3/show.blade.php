@extends('layouts.app')

@section('content')
    <h1>Masrof Asnaf Far3 Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $masrof->description }}</h5>
            <p class="card-text"><strong>Amount:</strong> {{ $masrof->amount }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $masrof->date }}</p>
            <a href="{{ route('storemasrofasnaffar3.edit', $masrof->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storemasrofasnaffar3.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
