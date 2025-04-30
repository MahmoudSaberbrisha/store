@extends('layouts.app')

@section('content')
    <h1>Add New Tasnef Setting</h1>

    <form action="{{ route('storetasnefsetting.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tasnef_name" class="form-label">Tasnef Name</label>
            <input type="text" class="form-control" id="tasnef_name" name="tasnef_name" required maxlength="100"
                value="{{ old('tasnef_name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Tasnef Setting</button>
        <a href="{{ route('storetasnefsetting.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
