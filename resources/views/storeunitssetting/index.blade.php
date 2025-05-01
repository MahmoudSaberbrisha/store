@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Units Settings</h1>
        <a href="{{ route('storeunitssetting.create') }}" class="btn btn-primary">Add New Units Setting</a>
    </div>

    <div class="row">
        @foreach ($units as $unit)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $unit->unit_name }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $unit->id }}</div>
                            <div class="col-12"><strong>Description:</strong> {{ $unit->description }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storeunitssetting.show', $unit->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storeunitssetting.edit', $unit->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeunitssetting.destroy', $unit->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
