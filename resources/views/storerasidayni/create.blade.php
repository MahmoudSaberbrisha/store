@extends('layouts.app')

@section('content')
    <h1>Add New Rasid Ayni</h1>

    <form action="{{ route('storerasidayni.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required maxlength="255"
                value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount" required
                value="{{ old('amount') }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Rasid Ayni</button>
        <a href="{{ route('storerasidayni.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
