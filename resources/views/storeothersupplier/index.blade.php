@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Other Suppliers</h1>
        <a href="{{ route('storeothersupplier.create') }}" class="btn btn-primary">Add New Supplier</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Supplier Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td><a href="{{ route('storeothersupplier.show', $supplier->id) }}">{{ $supplier->name }}</a></td>
                    <td>{{ $supplier->contact }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                        <a href="{{ route('storeothersupplier.edit', $supplier->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeothersupplier.destroy', $supplier->id) }}" method="POST"
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
