@extends('layouts.app')

@section('content')
    <h1>Other Storage Record Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $storage->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $storage->description }}</p>
            <p class="card-text"><strong>Location:</strong> {{ $storage->location }}</p>
            <a href="{{ route('storeotherstorage.edit', $storage->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storeotherstorage.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
