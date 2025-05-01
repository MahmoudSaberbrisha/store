@extends('layouts.app')

@section('content')
    <h1>Edit Purchase</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storepurchase.update', $purchase->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="marge3_num" class="form-label">Marge3 Num</label>
            <input type="text" class="form-control" id="marge3_num" name="marge3_num" maxlength="255"
                value="{{ old('marge3_num', $purchase->marge3_num) }}">
        </div>
        <div class="mb-3">
            <label for="main_branch_id_fk" class="form-label">Main Branch ID</label>
            <input type="number" class="form-control" id="main_branch_id_fk" name="main_branch_id_fk" required
                value="{{ old('main_branch_id_fk', $purchase->main_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch ID</label>
            <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                value="{{ old('sub_branch_id_fk', $purchase->sub_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sarf_rkm" class="form-label">Sarf Rkm</label>
            <input type="text" class="form-control" id="sarf_rkm" name="sarf_rkm" maxlength="255"
                value="{{ old('sarf_rkm', $purchase->sarf_rkm) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_code" class="form-label">Fatora Code</label>
            <input type="number" class="form-control" id="fatora_code" name="fatora_code" required
                value="{{ old('fatora_code', $purchase->fatora_code) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_date" class="form-label">Fatora Date</label>
            <input type="date" class="form-control" id="fatora_date" name="fatora_date"
                value="{{ old('fatora_date', $purchase->fatora_date) }}">
        </div>
        <div class="mb-3">
            <label for="supplier_code" class="form-label">Supplier Code</label>
            <input type="number" class="form-control" id="supplier_code" name="supplier_code" required
                value="{{ old('supplier_code', $purchase->supplier_code) }}">
        </div>
        <div class="mb-3">
            <label for="product_code" class="form-label">Product Code</label>
            <input type="number" class="form-control" id="product_code" name="product_code" required
                value="{{ old('product_code', $purchase->product_code) }}">
        </div>
        <div class="mb-3">
            <label for="amount_buy" class="form-label">Amount Buy</label>
            <input type="number" step="0.01" class="form-control" id="amount_buy" name="amount_buy" required
                value="{{ old('amount_buy', $purchase->amount_buy) }}">
        </div>
        <div class="mb-3">
            <label for="all_cost_buy" class="form-label">All Cost Buy</label>
            <input type="number" step="0.01" class="form-control" id="all_cost_buy" name="all_cost_buy" required
                value="{{ old('all_cost_buy', $purchase->all_cost_buy) }}">
        </div>
        <div class="mb-3">
            <label for="one_price_sell" class="form-label">One Price Sell</label>
            <input type="number" step="0.01" class="form-control" id="one_price_sell" name="one_price_sell" required
                value="{{ old('one_price_sell', $purchase->one_price_sell) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date (timestamp)</label>
            <input type="number" class="form-control" id="date" name="date" required
                value="{{ old('date', $purchase->date) }}">
        </div>
        <div class="mb-3">
            <label for="date_s" class="form-label">Date S (timestamp)</label>
            <input type="number" class="form-control" id="date_s" name="date_s" required
                value="{{ old('date_s', $purchase->date_s) }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher ID</label>
            <input type="number" class="form-control" id="publisher" name="publisher" required
                value="{{ old('publisher', $purchase->publisher) }}">
        </div>
        <div class="mb-3">
            <label for="sarf_far3_pill_num" class="form-label">Sarf Far3 Pill Num</label>
            <input type="text" class="form-control" id="sarf_far3_pill_num" name="sarf_far3_pill_num"
                maxlength="255" value="{{ old('sarf_far3_pill_num', $purchase->sarf_far3_pill_num) }}">
        </div>
        <div class="mb-3">
            <label for="old" class="form-label">Old</label>
            <select class="form-select" id="old" name="old">
                <option value="" {{ old('old', $purchase->old) === null ? 'selected' : '' }}>None</option>
                <option value="1" {{ old('old', $purchase->old) === 1 ? 'selected' : '' }}>True</option>
                <option value="0" {{ old('old', $purchase->old) === 0 ? 'selected' : '' }}>False</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Purchase</button>
        <a href="{{ route('storepurchase.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
