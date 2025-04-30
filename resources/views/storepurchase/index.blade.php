@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Purchases</h1>
        <a href="{{ route('storepurchase.create') }}" class="btn btn-primary">Add New Purchase</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Purchase Number</th>
                <th>Date</th>
                <th>Supplier</th>
                <th>Total Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td><a href="{{ route('storepurchase.show', $purchase->id) }}">{{ $purchase->purchase_number }}</a></td>
                    <td>{{ $purchase->date }}</td>
                    <td>{{ $purchase->supplier_name }}</td>
                    <td>{{ $purchase->total_amount }}</td>
                    <td>
                        <a href="{{ route('storepurchase.edit', $purchase->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storepurchase.destroy', $purchase->id) }}" method="POST" class="d-inline"
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
