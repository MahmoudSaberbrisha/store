@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Other Storage</h1>
        <a href="{{ route('storeotherstorage.create') }}" class="btn btn-primary">Add New Storage Record</a>
    </div>

    <div class="row">
        @foreach ($storages as $storage)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storeotherstorage.show', $storage->id) }}" class="text-white text-decoration-none">
                            {{ $storage->title }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $storage->id }}</div>
                            <div class="col-6"><strong>From Branch:</strong> {{ $storage->from_id_fk }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storeotherstorage.edit', $storage->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeotherstorage.destroy', $storage->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('Are you sure?');">
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
