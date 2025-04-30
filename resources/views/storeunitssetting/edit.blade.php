@extends('layouts.app')

@section('content')
    <h1>Edit Units Setting</h1>

    <form action="{{ route('storeunitssetting.update', $unitssetting->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="unit_name" class="form-label">Unit Name</label>
            <input type="text" class="form-control" id="unit_name" name="unit_name" required maxlength="100"
                value="{{ old('unit_name', $unitssetting->unit_name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $unitssetting->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Units Setting</button>
        <a href="{{ route('storeunitssetting.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
