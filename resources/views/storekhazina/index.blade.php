@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Khazina</h1>
        <a href="{{ route('storekhazina.create') }}" class="btn btn-primary">Add New Khazina Record</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Khazina Name</th>
                <th>Description</th>
                <th>Balance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($khazinas as $khazina)
                <tr>
                    <td>{{ $khazina->id }}</td>
                    <td><a href="{{ route('storekhazina.show', $khazina->id) }}">{{ $khazina->name }}</a></td>
                    <td>{{ $khazina->description }}</td>
                    <td>{{ $khazina->balance }}</td>
                    <td>
                        <a href="{{ route('storekhazina.edit', $khazina->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storekhazina.destroy', $khazina->id) }}" method="POST" class="d-inline"
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
