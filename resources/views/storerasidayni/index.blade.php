@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Rasid Ayni</h1>
        <a href="{{ route('storerasidayni.create') }}" class="btn btn-primary">Add New Rasid Ayni</a>
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
            @foreach ($rasidayni as $rasid)
                <tr>
                    <td>{{ $rasid->id }}</td>
                    <td><a href="{{ route('storerasidayni.show', $rasid->id) }}">{{ $rasid->description }}</a></td>
                    <td>{{ $rasid->amount }}</td>
                    <td>{{ $rasid->date }}</td>
                    <td>
                        <a href="{{ route('storerasidayni.edit', $rasid->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storerasidayni.destroy', $rasid->id) }}" method="POST" class="d-inline"
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
