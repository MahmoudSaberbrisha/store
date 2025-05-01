@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Add New Return Purchases Item</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storereturnpurchasesitem.store') }}" method="POST" class="p-4 border rounded shadow-sm">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="return_purchases_id" class="form-label">Return Purchases ID</label>
                <input type="number" class="form-control" id="return_purchases_id" name="return_purchases_id" required
                    value="{{ old('return_purchases_id') }}">
            </div>
            <div class="col-md-6">
                <label for="item_code" class="form-label">Item Code</label>
                <input type="number" class="form-control" id="item_code" name="item_code" required
                    value="{{ old('item_code') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="item_name" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="item_name" name="item_name" required
                    value="{{ old('item_name') }}">
            </div>
            <div class="col-md-6">
                <label for="one_price_buy" class="form-label">One Price Buy</label>
                <input type="number" step="0.01" class="form-control" id="one_price_buy" name="one_price_buy" required
                    value="{{ old('one_price_buy') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="return_amount" class="form-label">Return Amount</label>
                <input type="number" step="0.01" class="form-control" id="return_amount" name="return_amount" required
                    value="{{ old('return_amount') }}">
            </div>
            <div class="col-md-6">
                <label for="price_return_amount" class="form-label">Price Return Amount</label>
                <input type="number" step="0.01" class="form-control" id="price_return_amount"
                    name="price_return_amount" required value="{{ old('price_return_amount') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required
                    value="{{ old('date') }}">
            </div>
            <div class="col-md-6">
                <label for="date_ar" class="form-label">Date Ar</label>
                <input type="text" class="form-control" id="date_ar" name="date_ar" value="{{ old('date_ar') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="number" class="form-control" id="publisher" name="publisher" required
                    value="{{ old('publisher') }}">
            </div>
            <div class="col-md-6">
                <label for="publisher_name" class="form-label">Publisher Name</label>
                <input type="text" class="form-control" id="publisher_name" name="publisher_name"
                    value="{{ old('publisher_name') }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="sub_branch_id_fk" class="form-label">Sub Branch ID</label>
                <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                    value="{{ old('sub_branch_id_fk') }}">
            </div>
            <div class="col-md-6">
                <label for="supplier_code" class="form-label">Supplier Code</label>
                <input type="number" class="form-control" id="supplier_code" name="supplier_code" required
                    value="{{ old('supplier_code') }}">
            </div>
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-primary">Add Return Purchases Item</button>
            <a href="{{ route('storereturnpurchasesitem.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
