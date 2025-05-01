@extends('layouts.app')

@section('content')
    <h1>Rasid Ayni Bar Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $record->id }}
    </div>
    <div class="mb-3">
        <strong>Field 1:</strong> {{ $record->field1 }}
    </div>
    <div class="mb-3">
        <strong>Field 2:</strong> {{ $record->field2 }}
    </div>

    <a href="{{ route('storerasidaynibar.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storerasidaynibar.edit', $record->id) }}" class="btn btn-primary">Edit</a>
@endsection
