@extends('layouts.app')

@section('content')
    <h1>Edit Store Item</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storeitems.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="50"
                value="{{ old('name', $item->name) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_code" class="form-label">Item Code</label>
            <input type="text" class="form-control" id="sanf_code" name="sanf_code" required maxlength="50"
                value="{{ old('sanf_code', $item->sanf_code) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_type" class="form-label">Item Type</label>
            <input type="text" class="form-control" id="sanf_type" name="sanf_type" maxlength="50"
                value="{{ old('sanf_type', $item->sanf_type) }}">
        </div>
        <div class="mb-3">
            <label for="main_branch_id_fk" class="form-label">Main Branch</label>
            <input type="number" class="form-control" id="main_branch_id_fk" name="main_branch_id_fk" required
                value="{{ old('main_branch_id_fk', $item->main_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch</label>
            <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                value="{{ old('sub_branch_id_fk', $item->sub_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="id_from" class="form-label">ID From</label>
            <input type="number" class="form-control" id="id_from" name="id_from"
                value="{{ old('id_from', $item->id_from) }}">
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit" required maxlength="50"
                value="{{ old('unit', $item->unit) }}">
        </div>
        <div class="mb-3">
            <label for="limit_order" class="form-label">Limit Order</label>
            <input type="text" class="form-control" id="limit_order" name="limit_order" maxlength="50"
                value="{{ old('limit_order', $item->limit_order) }}">
        </div>
        <div class="mb-3">
            <label for="min_limit" class="form-label">Min Limit</label>
            <input type="text" class="form-control" id="min_limit" name="min_limit" maxlength="50"
                value="{{ old('min_limit', $item->min_limit) }}">
        </div>
        <div class="mb-3">
            <label for="all_buy_cost" class="form-label">All Buy Cost</label>
            <input type="number" step="0.01" class="form-control" id="all_buy_cost" name="all_buy_cost"
                value="{{ old('all_buy_cost', $item->all_buy_cost) }}">
        </div>
        <div class="mb-3">
            <label for="all_amount" class="form-label">All Amount</label>
            <input type="text" class="form-control" id="all_amount" name="all_amount" maxlength="50"
                value="{{ old('all_amount', $item->all_amount) }}">
        </div>
        <div class="mb-3">
            <label for="one_buy_cost" class="form-label">One Buy Cost</label>
            <input type="number" step="0.01" class="form-control" id="one_buy_cost" name="one_buy_cost"
                value="{{ old('one_buy_cost', $item->one_buy_cost) }}">
        </div>
        <div class="mb-3">
            <label for="customer_price_sale" class="form-label">Customer Price Sale</label>
            <input type="number" step="0.01" class="form-control" id="customer_price_sale"
                name="customer_price_sale" value="{{ old('customer_price_sale', $item->customer_price_sale) }}">
        </div>
        <div class="mb-3">
            <label for="first_balance_period" class="form-label">First Balance Period</label>
            <input type="text" class="form-control" id="first_balance_period" name="first_balance_period"
                maxlength="50" value="{{ old('first_balance_period', $item->first_balance_period) }}">
        </div>
        <div class="mb-3">
            <label for="past_amount" class="form-label">Past Amount</label>
            <input type="number" step="0.01" class="form-control" id="past_amount" name="past_amount"
                value="{{ old('past_amount', $item->past_amount) }}">
        </div>
        <div class="mb-3">
            <label for="cost_past_amount" class="form-label">Cost Past Amount</label>
            <input type="text" class="form-control" id="cost_past_amount" name="cost_past_amount" maxlength="50"
                value="{{ old('cost_past_amount', $item->cost_past_amount) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_type_gym" class="form-label">Sanf Type Gym</label>
            <input type="number" class="form-control" id="sanf_type_gym" name="sanf_type_gym"
                value="{{ old('sanf_type_gym', $item->sanf_type_gym) }}">
        </div>
        <div class="mb-3">
            <label for="sale_price" class="form-label">Sale Price</label>
            <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price"
                value="{{ old('sale_price', $item->sale_price) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Item</button>
        <a href="{{ route('storeitems.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
