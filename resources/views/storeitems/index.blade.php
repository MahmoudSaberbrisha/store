@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Items</h1>
        <a href="{{ route('storeitems.create') }}" class="btn btn-primary">Add New Item</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Type</th>
                <th>Unit</th>
                <th>Sale Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ route('storeitems.show', $item->id) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->sanf_code }}</td>
                    <td>{{ $item->sanf_type }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>{{ $item->sale_price }}</td>
                    <td>
                        <a href="{{ route('storeitems.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeitems.destroy', $item->id) }}" method="POST" class="d-inline"
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
