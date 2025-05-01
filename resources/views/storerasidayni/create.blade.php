@extends('layouts.app')

@section('content')
    <h1>Add New Rasid Ayni</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storerasidayni.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="main_branch_id_fk" class="form-label">Main Branch ID</label>
                <input type="number" class="form-control" id="main_branch_id_fk" name="main_branch_id_fk" required
                    value="{{ old('main_branch_id_fk') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="sub_branch_id_fk" class="form-label">Sub Branch ID</label>
                <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                    value="{{ old('sub_branch_id_fk') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date_ar" class="form-label">Date AR</label>
                <input type="text" class="form-control" id="date_ar" name="date_ar" value="{{ old('date_ar') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="publisher_name" class="form-label">Publisher Name</label>
                <input type="text" class="form-control" id="publisher_name" name="publisher_name"
                    value="{{ old('publisher_name') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="number" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sanf_code" class="form-label">Sanf Code</label>
                <input type="text" class="form-control" id="sanf_code" name="sanf_code" value="{{ old('sanf_code') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="sanf_id" class="form-label">Sanf ID</label>
                <input type="number" class="form-control" id="sanf_id" name="sanf_id" value="{{ old('sanf_id') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sanf_name" class="form-label">Sanf Name</label>
                <input type="text" class="form-control" id="sanf_name" name="sanf_name" value="{{ old('sanf_name') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="sanf_amount" class="form-label">Sanf Amount</label>
                <input type="number" step="any" class="form-control" id="sanf_amount" name="sanf_amount"
                    value="{{ old('sanf_amount') }}">
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Add Rasid Ayni</button>
            <a href="{{ route('storerasidayni.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
