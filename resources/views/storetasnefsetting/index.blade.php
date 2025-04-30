@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Tasnef Setting</h1>
        <a href="{{ route('storetasnefsetting.create') }}" class="btn btn-primary">Add New Tasnef Setting</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tasnef Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasnefsettings as $tasnefsetting)
                <tr>
                    <td>{{ $tasnefsetting->id }}</td>
                    <td><a
                            href="{{ route('storetasnefsetting.show', $tasnefsetting->id) }}">{{ $tasnefsetting->tasnef_name }}</a>
                    </td>
                    <td>{{ $tasnefsetting->description }}</td>
                    <td>
                        <a href="{{ route('storetasnefsetting.edit', $tasnefsetting->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storetasnefsetting.destroy', $tasnefsetting->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('Are you sure?');">
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
