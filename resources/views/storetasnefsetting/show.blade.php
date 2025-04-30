@extends('layouts.app')

@section('content')
    <h1>Tasnef Setting Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tasnefsetting->tasnef_name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $tasnefsetting->description }}</p>
            <a href="{{ route('storetasnefsetting.edit', $tasnefsetting->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storetasnefsetting.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
