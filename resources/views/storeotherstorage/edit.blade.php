@extends('layouts.app')

@section('content')
    <h1>Edit Other Storage Record</h1>

    <form action="{{ route('storeotherstorage.update', $storage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Storage Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="100"
                value="{{ old('name', $storage->name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $storage->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" maxlength="100"
                value="{{ old('location', $storage->location) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Storage</button>
        <a href="{{ route('storeotherstorage.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
