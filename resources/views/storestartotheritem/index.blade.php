@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Viewed Items</h1>
        <a href="{{ route('storestartotheritem.create') }}" class="btn btn-primary">Add New Item</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Main Branch</th>
                <th>Sub Branch</th>
                <th>Pill</th>
                <th>Sanf Code</th>
                <th>Available Amount</th>
                <th>One Buy Cost</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Date S</th>
                <th>Old</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->main_branch }}</td>
                    <td>{{ $item->sub_branch }}</td>
                    <td>{{ $item->pill }}</td>
                    <td>{{ $item->sanf_code }}</td>
                    <td>{{ $item->available_amount }}</td>
                    <td>{{ $item->one_buy_cost }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->date_s }}</td>
                    <td>{{ $item->old ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('storestartotheritem.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storestartotheritem.destroy', $item->id) }}" method="POST" class="d-inline"
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
