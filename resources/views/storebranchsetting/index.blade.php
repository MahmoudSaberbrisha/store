@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Branch Setting</h1>
        <a href="{{ route('storebranchsetting.create') }}" class="btn btn-primary">Add New Branch Setting</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Branch Name</th>
                <th>Branch Code</th>
                <th>Parent Branch</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branchsettings as $branchsetting)
                <tr>
                    <td>{{ $branchsetting->id }}</td>
                    <td><a href="{{ route('storebranchsetting.show', $branchsetting->id) }}">{{ $branchsetting->title }}</a>
                    </td>
                    <td>{{ $branchsetting->br_code ?: 'None' }}</td>
                    <td>{{ $branchsetting->from_id ? optional($branchsetting->parentBranch)->title : 'None' }}</td>
                    <td>{{ $branchsetting->lat_map ?: 'N/A' }}</td>
                    <td>{{ $branchsetting->long_map ?: 'N/A' }}</td>
                    <td>
                        <a href="{{ route('storebranchsetting.edit', $branchsetting->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storebranchsetting.destroy', $branchsetting->id) }}" method="POST"
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
