@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Units Setting</h1>
        <a href="{{ route('storeunitssetting.create') }}" class="btn btn-primary">Add New Units Setting</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Unit Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unitssettings as $unitssetting)
                <tr>
                    <td>{{ $unitssetting->id }}</td>
                    <td><a href="{{ route('storeunitssetting.show', $unitssetting->id) }}">{{ $unitssetting->unit_name }}</a>
                    </td>
                    <td>{{ $unitssetting->description }}</td>
                    <td>
                        <a href="{{ route('storeunitssetting.edit', $unitssetting->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeunitssetting.destroy', $unitssetting->id) }}" method="POST"
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
