@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store All Items Prices</h1>
        <a href="{{ route('storeallitemsprices.create') }}" class="btn btn-primary">Add New Price Record</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Publisher</th>
                <th>Publisher Name</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Date</th>
                <th>Update Time</th>
                <th>New Price</th>
                <th>Old Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prices as $price)
                <tr>
                    <td>{{ $price->id }}</td>
                    <td>{{ $price->publisher }}</td>
                    <td>{{ $price->publisher_name }}</td>
                    <td>{{ $price->sanf_code }}</td>
                    <td>{{ $price->sanf_name }}</td>
                    <td>{{ $price->date_ar }}</td>
                    <td>{{ $price->update_time }}</td>
                    <td>{{ $price->new_price }}</td>
                    <td>{{ $price->old_price }}</td>
                    <td>
                        <a href="{{ route('storeallitemsprices.show', $price->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storeallitemsprices.edit', $price->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeallitemsprices.destroy', $price->id) }}" method="POST"
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
