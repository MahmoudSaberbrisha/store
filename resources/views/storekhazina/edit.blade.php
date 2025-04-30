@extends('layouts.app')

@section('content')
    <h1>Edit Khazina Record</h1>

    <form action="{{ route('storekhazina.update', $khazina->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Khazina Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="100"
                value="{{ old('name', $khazina->name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $khazina->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="balance" class="form-label">Balance</label>
            <input type="number" step="0.01" class="form-control" id="balance" name="balance"
                value="{{ old('balance', $khazina->balance) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Khazina</button>
        <a href="{{ route('storekhazina.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
