@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Start Other Fatora</h1>
        <a href="{{ route('storestartotherfatora.create') }}" class="btn btn-primary">Add New Fatora Record</a>
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
            @foreach ($fatoras as $fatora)
                <tr>
                    <td>{{ $fatora->id }}</td>
                    <td><a href="{{ route('storestartotherfatora.show', $fatora->id) }}">{{ $fatora->fatora_number }}</a>
                    </td>
                    <td>{{ $fatora->date }}</td>
                    <td>{{ $fatora->supplier_name }}</td>
                    <td>{{ $fatora->total_amount }}</td>
                    <td>
                        <a href="{{ route('storestartotherfatora.edit', $fatora->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storestartotherfatora.destroy', $fatora->id) }}" method="POST"
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
