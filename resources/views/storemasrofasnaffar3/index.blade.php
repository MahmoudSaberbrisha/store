@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Masrof Asnaf Far3</h1>
        <a href="{{ route('storemasrofasnaffar3.create') }}" class="btn btn-primary">Add New Masrof Asnaf Far3</a>
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
            @foreach ($masrofasnaf as $masrof)
                <tr>
                    <td>{{ $masrof->id }}</td>
                    <td><a href="{{ route('storemasrofasnaffar3.show', $masrof->id) }}">{{ $masrof->description }}</a></td>
                    <td>{{ $masrof->amount }}</td>
                    <td>{{ $masrof->date }}</td>
                    <td>
                        <a href="{{ route('storemasrofasnaffar3.edit', $masrof->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storemasrofasnaffar3.destroy', $masrof->id) }}" method="POST"
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
