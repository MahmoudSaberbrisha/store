@extends('layouts.app')

@section('content')
    <h1>Storage Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $storage->id }}
    </div>
    <div class="mb-3">
        <strong>Title:</strong> {{ $storage->title }}
    </div>
    <div class="mb-3">
        <strong>From Branch:</strong> {{ $storage->from_id_fk }}
    </div>

    <a href="{{ route('storeotherstorage.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storeotherstorage.edit', $storage->id) }}" class="btn btn-primary">Edit</a>
@endsection
