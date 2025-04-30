@extends('layouts.app')

@section('content')
    <h1>Add New Store Item Price</h1>

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

    <form action="{{ route('storeallitemsprices.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <select class="form-select" id="publisher" name="publisher">
                <option value="">Select Publisher</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ old('publisher') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="publisher_name" class="form-label">Publisher Name</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name" maxlength="15"
                value="{{ old('publisher_name') }}">
        </div>
        <div class="mb-3">
            <label for="sanf_code" class="form-label">Item Code</label>
            <input type="text" class="form-control" id="sanf_code" name="sanf_code" maxlength="50"
                value="{{ old('sanf_code') }}">
        </div>
        <div class="mb-3">
            <label for="sanf_name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="sanf_name" name="sanf_name" maxlength="50"
                value="{{ old('sanf_name') }}">
        </div>
        <div class="mb-3">
            <label for="date_ar" class="form-label">Date</label>
            <input type="date" class="form-control" id="date_ar" name="date_ar" maxlength="15"
                value="{{ old('date_ar') }}">
        </div>
        <div class="mb-3">
            <label for="update_time" class="form-label">Update Time</label>
            <input type="time" class="form-control" id="update_time" name="update_time" maxlength="15"
                value="{{ old('update_time') }}">
        </div>
        <div class="mb-3">
            <label for="new_price" class="form-label">New Price</label>
            <input type="number" class="form-control" id="new_price" name="new_price" step="0.01"
                value="{{ old('new_price') }}">
        </div>
        <div class="mb-3">
            <label for="old_price" class="form-label">Old Price</label>
            <input type="number" class="form-control" id="old_price" name="old_price" step="0.01"
                value="{{ old('old_price') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Price Record</button>
        <a href="{{ route('storeallitemsprices.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
