@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Tahwelat</h1>
        <a href="{{ route('storetahwelat.create') }}" class="btn btn-primary">Add New Tahwelat</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tahwelats as $tahwelat)
                <tr>
                    <td>{{ $tahwelat->id }}</td>
                    <td><a href="{{ route('storetahwelat.show', $tahwelat->id) }}">{{ $tahwelat->description }}</a></td>
                    <td>{{ $tahwelat->amount }}</td>
                    <td>{{ $tahwelat->date }}</td>
                    <td>
                        <a href="{{ route('storetahwelat.edit', $tahwelat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storetahwelat.destroy', $tahwelat->id) }}" method="POST" class="d-inline"
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
