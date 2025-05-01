@extends('layouts.app')

@section('content')
    <h1>Edit Rasid Ayni Bar</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storerasidaynibar.update', $record->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="field1" class="form-label">Field 1</label>
            <input type="text" class="form-control" id="field1" name="field1" required
                value="{{ old('field1', $record->field1) }}">
        </div>
        <div class="mb-3">
            <label for="field2" class="form-label">Field 2</label>
            <input type="number" class="form-control" id="field2" name="field2"
                value="{{ old('field2', $record->field2) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Rasid Ayni Bar</button>
        <a href="{{ route('storerasidaynibar.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
