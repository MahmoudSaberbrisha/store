@extends('layouts.app')

@section('content')
    <h1>Add New Other Storage Record</h1>

    <form action="{{ route('storeotherstorage.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Storage Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="100"
                value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" maxlength="100"
                value="{{ old('location') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Storage</button>
        <a href="{{ route('storeotherstorage.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
