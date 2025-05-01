@extends('layouts.app')

@section('content')
    <h1>Hadback Purchase Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hadback Purchase #{{ $hadback->id }}</h5>
            <p class="card-text"><strong>Main Branch:</strong>
                {{ $hadback->mainBranch ? $hadback->mainBranch->branch_name ?? '' : '' }}</p>
            <p class="card-text"><strong>Sub Branch:</strong>
                {{ $hadback->subBranch ? $hadback->subBranch->branch_name ?? '' : '' }}</p>
            <p class="card-text"><strong>Supplier:</strong>
                {{ $hadback->supplier ? $hadback->supplier->supplier_name ?? '' : '' }}</p>
            <p class="card-text"><strong>Fatora Code:</strong> {{ $hadback->fatora_code }}</p>
            <p class="card-text"><strong>Product Code:</strong> {{ $hadback->product_code }}</p>
            <p class="card-text"><strong>Amount Buy:</strong> {{ $hadback->amount_buy }}</p>
            <p class="card-text"><strong>All Cost Buy:</strong> {{ $hadback->all_cost_buy }}</p>
            <p class="card-text"><strong>One Price Sell:</strong> {{ $hadback->one_price_sell }}</p>
            <p class="card-text"><strong>Hadback Amount:</strong> {{ $hadback->hadback_amount }}</p>
            <p class="card-text"><strong>Date:</strong> {{ date('Y-m-d', $hadback->date) }}</p>
            <p class="card-text"><strong>Date S:</strong> {{ $hadback->date_s }}</p>
            <p class="card-text"><strong>Publisher:</strong>
                {{ $hadback->publisherUser ? $hadback->publisherUser->name ?? '' : '' }}</p>
            <a href="{{ route('storehadbackpurchase.edit', $hadback->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storehadbackpurchase.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
