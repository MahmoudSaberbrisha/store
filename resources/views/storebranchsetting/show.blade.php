@extends('layouts.app')

@section('content')
    <h1>Branch Setting Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $branchsetting->branch_name }}</h5>
            <p class="card-text"><strong>Location:</strong> {{ $branchsetting->location }}</p>
            <p class="card-text"><strong>Manager:</strong> {{ $branchsetting->manager }}</p>
            <a href="{{ route('storebranchsetting.edit', $branchsetting->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storebranchsetting.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
