@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Hadback Purchases</h1>
        <a href="{{ route('storehadbackpurchase.create') }}" class="btn btn-primary">Add New Hadback Purchase</a>
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
            @foreach ($hadbacks as $hadback)
                <tr>
                    <td>{{ $hadback->id }}</td>
                    <td><a href="{{ route('storehadbackpurchase.show', $hadback->id) }}">{{ $hadback->purchase_number }}</a>
                    </td>
                    <td>{{ $hadback->date }}</td>
                    <td>{{ $hadback->supplier_name }}</td>
                    <td>{{ $hadback->total_amount }}</td>
                    <td>
                        <a href="{{ route('storehadbackpurchase.edit', $hadback->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storehadbackpurchase.destroy', $hadback->id) }}" method="POST"
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
