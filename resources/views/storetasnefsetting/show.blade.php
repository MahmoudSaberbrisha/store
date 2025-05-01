@extends('layouts.app')

@section('content')
    <h1>Tasnef Setting Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $tasnef->id }}
    </div>
    <div class="mb-3">
        <strong>Name:</strong> {{ $tasnef->name }}
    </div>
    <div class="mb-3">
        <strong>Type:</strong> {{ $tasnef->type }}
    </div>

    <a href="{{ route('storetasnefsetting.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storetasnefsetting.edit', $tasnef->id) }}" class="btn btn-primary">Edit</a>
@endsection
