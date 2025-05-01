@extends('layouts.app')

@section('content')
    <h1>Units Setting Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $unit->id }}
    </div>
    <div class="mb-3">
        <strong>Unit Name:</strong> {{ $unit->unit_name }}
    </div>
    <div class="mb-3">
        <strong>Description:</strong> {{ $unit->description }}
    </div>

    <a href="{{ route('storeunitssetting.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storeunitssetting.edit', $unit->id) }}" class="btn btn-primary">Edit</a>
@endsection
