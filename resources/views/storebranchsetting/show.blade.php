@extends('layouts.app')

@section('content')
    <h1>Branch Setting Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $branch->id }}
    </div>
    <div class="mb-3">
        <strong>Title:</strong> {{ $branch->title }}
    </div>
    <div class="mb-3">
        <strong>Branch Code:</strong> {{ $branch->br_code }}
    </div>
    <div class="mb-3">
        <strong>Parent Branch:</strong> {{ $branch->parentBranch ? $branch->parentBranch->title : '' }}
    </div>
    <div class="mb-3">
        <strong>Latitude:</strong> {{ $branch->lat_map }}
    </div>
    <div class="mb-3">
        <strong>Longitude:</strong> {{ $branch->long_map }}
    </div>

    <a href="{{ route('storebranchsetting.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storebranchsetting.edit', $branch->id) }}" class="btn btn-primary">Edit</a>
@endsection
