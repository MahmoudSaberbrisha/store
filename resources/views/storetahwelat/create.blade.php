@extends('layouts.app')

@section('content')
    <h1>Add New Tahwelat</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storetahwelat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="rkm" class="form-label">Rkm</label>
            <input type="number" class="form-control" id="rkm" name="rkm" required value="{{ old('rkm') }}">
        </div>
        <div class="mb-3">
            <label for="order_date" class="form-label">Order Date</label>
            <input type="date" class="form-control" id="order_date" name="order_date" required
                value="{{ old('order_date') }}">
        </div>
        <div class="mb-3">
            <label for="order_date_ar" class="form-label">Order Date AR</label>
            <input type="text" class="form-control" id="order_date_ar" name="order_date_ar" maxlength="255"
                value="{{ old('order_date_ar') }}">
        </div>
        <div class="mb-3">
            <label for="order_time" class="form-label">Order Time</label>
            <input type="text" class="form-control" id="order_time" name="order_time" maxlength="50"
                value="{{ old('order_time') }}">
        </div>
        <div class="mb-3">
            <label for="from_storage" class="form-label">From Storage</label>
            <input type="number" class="form-control" id="from_storage" name="from_storage" required
                value="{{ old('from_storage') }}">
        </div>
        <div class="mb-3">
            <label for="to_storage" class="form-label">To Storage</label>
            <input type="number" class="form-control" id="to_storage" name="to_storage" required
                value="{{ old('to_storage') }}">
        </div>
        <div class="mb-3">
            <label for="reason" class="form-label">Reason</label>
            <input type="text" class="form-control" id="reason" name="reason" maxlength="255"
                value="{{ old('reason') }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="number" class="form-control" id="publisher" name="publisher" required
                value="{{ old('publisher') }}">
        </div>
        <div class="mb-3">
            <label for="publisher_name" class="form-label">Publisher Name</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name" maxlength="255"
                value="{{ old('publisher_name') }}">
        </div>
        <div class="mb-3">
            <label for="from_storage_n" class="form-label">From Storage Name</label>
            <input type="text" class="form-control" id="from_storage_n" name="from_storage_n" maxlength="255"
                value="{{ old('from_storage_n') }}">
        </div>
        <div class="mb-3">
            <label for="to_storage_n" class="form-label">To Storage Name</label>
            <input type="text" class="form-control" id="to_storage_n" name="to_storage_n" maxlength="255"
                value="{{ old('to_storage_n') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Tahwelat</button>
        <a href="{{ route('storetahwelat.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
