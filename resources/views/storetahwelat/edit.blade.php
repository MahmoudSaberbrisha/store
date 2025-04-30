@extends('layouts.app')

@section('content')
    <h1>Edit Tahwelat</h1>

    <form action="{{ route('storetahwelat.update', $tahwelat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required maxlength="255"
                value="{{ old('description', $tahwelat->description) }}">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount" required
                value="{{ old('amount', $tahwelat->amount) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required
                value="{{ old('date', $tahwelat->date) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Tahwelat</button>
        <a href="{{ route('storetahwelat.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
