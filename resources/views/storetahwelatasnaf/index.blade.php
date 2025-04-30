@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Tahwelat Asnaf</h1>
        <a href="{{ route('storetahwelatasnaf.create') }}" class="btn btn-primary">Add New Tahwelat Asnaf</a>
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
            @foreach ($tahwelatasnafs as $tahwelatasnaf)
                <tr>
                    <td>{{ $tahwelatasnaf->id }}</td>
                    <td><a
                            href="{{ route('storetahwelatasnaf.show', $tahwelatasnaf->id) }}">{{ $tahwelatasnaf->description }}</a>
                    </td>
                    <td>{{ $tahwelatasnaf->amount }}</td>
                    <td>{{ $tahwelatasnaf->date }}</td>
                    <td>
                        <a href="{{ route('storetahwelatasnaf.edit', $tahwelatasnaf->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storetahwelatasnaf.destroy', $tahwelatasnaf->id) }}" method="POST"
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
