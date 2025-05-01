@extends('layouts.app')

@section('content')
    <h1>Edit Units Setting</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storeunitssetting.update', $unit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="unit_name" class="form-label">Unit Name</label>
            <input type="text" class="form-control" id="unit_name" name="unit_name" required maxlength="100"
                value="{{ old('unit_name', $unit->unit_name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $unit->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Units Setting</button>
        <a href="{{ route('storeunitssetting.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
