@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Other Storage</h1>
        <a href="{{ route('storeotherstorage.create') }}" class="btn btn-primary">Add New Storage Record</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Storage Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($storages as $storage)
                <tr>
                    <td>{{ $storage->id }}</td>
                    <td><a href="{{ route('storeotherstorage.show', $storage->id) }}">{{ $storage->name }}</a></td>
                    <td>{{ $storage->description }}</td>
                    <td>{{ $storage->location }}</td>
                    <td>
                        <a href="{{ route('storeotherstorage.edit', $storage->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeotherstorage.destroy', $storage->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
