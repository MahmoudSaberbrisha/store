@extends('layouts.app')

@section('content')
    <h1>Purchase Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $purchase->id }}
    </div>
    <div class="mb-3">
        <strong>Marge3 Num:</strong> {{ $purchase->marge3_num }}
    </div>
    <div class="mb-3">
        <strong>Main Branch ID:</strong> {{ $purchase->main_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Sub Branch ID:</strong> {{ $purchase->sub_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Sarf Rkm:</strong> {{ $purchase->sarf_rkm }}
    </div>
    <div class="mb-3">
        <strong>Fatora Code:</strong> {{ $purchase->fatora_code }}
    </div>
    <div class="mb-3">
        <strong>Fatora Date:</strong> {{ $purchase->fatora_date }}
    </div>
    <div class="mb-3">
        <strong>Supplier Code:</strong> {{ $purchase->supplier_code }}
    </div>
    <div class="mb-3">
        <strong>Product Code:</strong> {{ $purchase->product_code }}
    </div>
    <div class="mb-3">
        <strong>Amount Buy:</strong> {{ $purchase->amount_buy }}
    </div>
    <div class="mb-3">
        <strong>All Cost Buy:</strong> {{ $purchase->all_cost_buy }}
    </div>
    <div class="mb-3">
        <strong>One Price Sell:</strong> {{ $purchase->one_price_sell }}
    </div>
    <div class="mb-3">
        <strong>Date:</strong> {{ $purchase->date }}
    </div>
    <div class="mb-3">
        <strong>Date S:</strong> {{ $purchase->date_s }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $purchase->publisher }}
    </div>
    <div class="mb-3">
        <strong>Sarf Far3 Pill Num:</strong> {{ $purchase->sarf_far3_pill_num }}
    </div>
    <div class="mb-3">
        <strong>Old:</strong> {{ $purchase->old ? 'Yes' : 'No' }}
    </div>

    <a href="{{ route('storepurchase.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storepurchase.edit', $purchase->id) }}" class="btn btn-primary">Edit</a>
@endsection
