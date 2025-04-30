@extends('layouts.app')

@section('content')
    <h1>Khazina Record Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $khazina->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $khazina->description }}</p>
            <p class="card-text"><strong>Balance:</strong> {{ $khazina->balance }}</p>
            <a href="{{ route('storekhazina.edit', $khazina->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storekhazina.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
