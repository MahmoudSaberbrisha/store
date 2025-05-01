@extends('layouts.app')

@section('content')
    <h1>Edit Hadback Purchase</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storehadbackpurchase.update', $hadback->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="main_branch_id_fk" class="form-label">Main Branch ID</label>
            <input type="number" class="form-control" id="main_branch_id_fk" name="main_branch_id_fk" required
                value="{{ old('main_branch_id_fk', $hadback->main_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch ID</label>
            <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                value="{{ old('sub_branch_id_fk', $hadback->sub_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="supplier_code" class="form-label">Supplier Code</label>
            <input type="number" class="form-control" id="supplier_code" name="supplier_code" required
                value="{{ old('supplier_code', $hadback->supplier_code) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_code" class="form-label">Fatora Code</label>
            <input type="number" class="form-control" id="fatora_code" name="fatora_code" required
                value="{{ old('fatora_code', $hadback->fatora_code) }}">
        </div>
        <div class="mb-3">
            <label for="product_code" class="form-label">Product Code</label>
            <input type="number" class="form-control" id="product_code" name="product_code" required
                value="{{ old('product_code', $hadback->product_code) }}">
        </div>
        <div class="mb-3">
            <label for="amount_buy" class="form-label">Amount Buy</label>
            <input type="number" step="0.01" class="form-control" id="amount_buy" name="amount_buy" required
                value="{{ old('amount_buy', $hadback->amount_buy) }}">
        </div>
        <div class="mb-3">
            <label for="all_cost_buy" class="form-label">All Cost Buy</label>
            <input type="number" step="0.01" class="form-control" id="all_cost_buy" name="all_cost_buy" required
                value="{{ old('all_cost_buy', $hadback->all_cost_buy) }}">
        </div>
        <div class="mb-3">
            <label for="one_price_sell" class="form-label">One Price Sell</label>
            <input type="number" step="0.01" class="form-control" id="one_price_sell" name="one_price_sell" required
                value="{{ old('one_price_sell', $hadback->one_price_sell) }}">
        </div>
        <div class="mb-3">
            <label for="hadback_amount" class="form-label">Hadback Amount</label>
            <input type="number" class="form-control" id="hadback_amount" name="hadback_amount" required
                value="{{ old('hadback_amount', $hadback->hadback_amount) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date (timestamp)</label>
            <input type="number" class="form-control" id="date" name="date" required
                value="{{ old('date', $hadback->date) }}">
        </div>
        <div class="mb-3">
            <label for="date_s" class="form-label">Date S (timestamp)</label>
            <input type="number" class="form-control" id="date_s" name="date_s" required
                value="{{ old('date_s', $hadback->date_s) }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher ID</label>
            <input type="number" class="form-control" id="publisher" name="publisher" required
                value="{{ old('publisher', $hadback->publisher) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Hadback Purchase</button>
        <a href="{{ route('storehadbackpurchase.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
