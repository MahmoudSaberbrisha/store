@extends('layouts.app')

@section('content')
    <h1>Add New Inventory Record</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                @if ($errors->has('error'))
                    <li>{{ $errors->first('error') }}</li>
                @endif
            </ul>
        </div>
    @endif

    <form action="{{ route('storeinventorytable.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="item_id_fk" class="form-label">Item</label>
            <select class="form-select" id="item_id_fk" name="item_id_fk" required>
                <option value="">Select Item</option>
                @foreach ($items as $item)
                    <option value="{{ $item->id }}" {{ old('item_id_fk') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="storage_id_fk" class="form-label">Storage ID</label>
            <input type="text" class="form-control" id="storage_id_fk" name="storage_id_fk" required maxlength="50"
                value="{{ old('storage_id_fk') }}">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" required value="{{ old('amount') }}">
        </div>
        <div class="mb-3">
            <label for="num_invent" class="form-label">Number Invent</label>
            <input type="number" class="form-control" id="num_invent" name="num_invent" required
                value="{{ old('num_invent') }}">
        </div>
        <div class="mb-3">
            <label for="available_amount" class="form-label">Available Amount</label>
            <input type="text" class="form-control" id="available_amount" name="available_amount" required maxlength="50"
                value="{{ old('available_amount') }}">
        </div>
        <div class="mb-3">
            <label for="invent_date" class="form-label">Invent Date</label>
            <input type="text" class="form-control" id="invent_date" name="invent_date" required maxlength="50"
                value="{{ old('invent_date') }}">
        </div>
        <div class="mb-3">
            <label for="sanf_type_gym" class="form-label">Sanf Type Gym</label>
            <select class="form-select" id="sanf_type_gym" name="sanf_type_gym" required>
                <option value="0" {{ old('sanf_type_gym') == '0' ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('sanf_type_gym') == '1' ? 'selected' : '' }}>Yes</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="employee_id_fk" class="form-label">Employee</label>
            <select class="form-select" id="employee_id_fk" name="employee_id_fk">
                <option value="">Select Employee</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ old('employee_id_fk') == $employee->id ? 'selected' : '' }}>
                        {{ $employee->name ?? $employee->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date" required maxlength="50"
                value="{{ old('date') }}">
        </div>
        <div class="mb-3">
            <label for="date_s" class="form-label">Date S</label>
            <input type="text" class="form-control" id="date_s" name="date_s" required maxlength="50"
                value="{{ old('date_s') }}">
        </div>
        <div class="mb-3">
            <label for="date_ar" class="form-label">Date AR</label>
            <input type="text" class="form-control" id="date_ar" name="date_ar" required maxlength="50"
                value="{{ old('date_ar') }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required maxlength="50"
                value="{{ old('publisher') }}">
        </div>
        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch ID</label>
            <input type="text" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                maxlength="50" value="{{ old('sub_branch_id_fk') }}">
        </div>
        <div class="mb-3">
            <label for="emp_code" class="form-label">Employee Code</label>
            <input type="number" class="form-control" id="emp_code" name="emp_code" value="{{ old('emp_code') }}">
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select class="form-select" id="user_id" name="user_id">
                <option value="">Select User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name ?? $user->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="deficit_amount" class="form-label">Deficit Amount</label>
            <input type="number" class="form-control" id="deficit_amount" name="deficit_amount" required
                value="{{ old('deficit_amount') }}">
        </div>
        <div class="mb-3">
            <label for="increase_amount" class="form-label">Increase Amount</label>
            <input type="number" class="form-control" id="increase_amount" name="increase_amount" required
                value="{{ old('increase_amount') }}">
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <input type="text" class="form-control" id="notes" name="notes" maxlength="50"
                value="{{ old('notes') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Inventory</button>
        <a href="{{ route('storeinventorytable.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
