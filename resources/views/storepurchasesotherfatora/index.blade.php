@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Purchases Other Fatora</h1>
        <a href="{{ route('storepurchasesotherfatora.create') }}" class="btn btn-primary">Add New Purchases Other Fatora</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Fatora Number</th>
                <th>Date</th>
                <th>Supplier</th>
                <th>Total Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchasesotherfatora as $purchases)
                <tr>
                    <td>{{ $purchases->id }}</td>
                    <td><a
                            href="{{ route('storepurchasesotherfatora.show', $purchases->id) }}">{{ $purchases->fatora_number }}</a>
                    </td>
                    <td>{{ $purchases->date }}</td>
                    <td>{{ $purchases->supplier_name }}</td>
                    <td>{{ $purchases->total_amount }}</td>
                    <td>
                        <a href="{{ route('storepurchasesotherfatora.edit', $purchases->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storepurchasesotherfatora.destroy', $purchases->id) }}" method="POST"
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
