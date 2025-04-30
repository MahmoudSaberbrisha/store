@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Inventory Table</h1>
        <a href="{{ route('storeinventorytable.create') }}" class="btn btn-primary">Add New Inventory Record</a>
    </div>

    <table class="table table-bordered table-striped table-responsive">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Storage ID</th>
                <th>Amount</th>
                <th>Number Invent</th>
                <th>Available Amount</th>
                <th>Invent Date</th>
                <th>Sanf Type Gym</th>
                <th>Employee</th>
                <th>Date</th>
                <th>Date S</th>
                <th>Date AR</th>
                <th>Publisher</th>
                <th>Sub Branch ID</th>
                <th>Employee Code</th>
                <th>User</th>
                <th>Deficit Amount</th>
                <th>Increase Amount</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                @php
                    $item = $items->firstWhere('id', $inventory->item_id_fk);
                    $employee = $employees->firstWhere('id', $inventory->employee_id_fk);
                    $user = $users->firstWhere('id', $inventory->user_id);
                @endphp
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $item ? $item->item_code : 'N/A' }}</td>
                    <td>{{ $item ? $item->item_name : 'N/A' }}</td>
                    <td>{{ $inventory->storage_id_fk }}</td>
                    <td>{{ $inventory->amount }}</td>
                    <td>{{ $inventory->num_invent }}</td>
                    <td>{{ $inventory->available_amount }}</td>
                    <td>{{ $inventory->invent_date }}</td>
                    <td>{{ $inventory->sanf_type_gym ? 'Yes' : 'No' }}</td>
                    <td>{{ $employee ? $employee->name ?? $employee->id : 'N/A' }}</td>
                    <td>{{ $inventory->date }}</td>
                    <td>{{ $inventory->date_s }}</td>
                    <td>{{ $inventory->date_ar }}</td>
                    <td>{{ $inventory->publisher }}</td>
                    <td>{{ $inventory->sub_branch_id_fk }}</td>
                    <td>{{ $inventory->emp_code }}</td>
                    <td>{{ $user ? $user->name ?? $user->id : 'N/A' }}</td>
                    <td>{{ $inventory->deficit_amount }}</td>
                    <td>{{ $inventory->increase_amount }}</td>
                    <td>{{ $inventory->notes }}</td>
                    <td>
                        <a href="{{ route('storeinventorytable.show', $inventory->id) }}"
                            class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storeinventorytable.edit', $inventory->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeinventorytable.destroy', $inventory->id) }}" method="POST"
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
