@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Purchases</h1>
        <a href="{{ route('storepurchase.create') }}" class="btn btn-primary">Add New Purchase</a>
    </div>

    <div class="row">
        @foreach ($purchases as $purchase)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storepurchase.show', $purchase->id) }}" class="text-white text-decoration-none">
                            {{ $purchase->marge3_num }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $purchase->id }}</div>
                            <div class="col-6"><strong>Main Branch ID:</strong> {{ $purchase->main_branch_id_fk }}</div>
                            <div class="col-6"><strong>Sub Branch ID:</strong> {{ $purchase->sub_branch_id_fk }}</div>
                            <div class="col-6"><strong>Sarf Rkm:</strong> {{ $purchase->sarf_rkm }}</div>
                            <div class="col-6"><strong>Fatora Code:</strong> {{ $purchase->fatora_code }}</div>
                            <div class="col-6"><strong>Fatora Date:</strong> {{ $purchase->fatora_date }}</div>
                            <div class="col-6"><strong>Supplier Code:</strong> {{ $purchase->supplier_code }}</div>
                            <div class="col-6"><strong>Product Code:</strong> {{ $purchase->product_code }}</div>
                            <div class="col-6"><strong>Amount Buy:</strong> {{ $purchase->amount_buy }}</div>
                            <div class="col-6"><strong>All Cost Buy:</strong> {{ $purchase->all_cost_buy }}</div>
                            <div class="col-6"><strong>One Price Sell:</strong> {{ $purchase->one_price_sell }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $purchase->date }}</div>
                            <div class="col-6"><strong>Date S:</strong> {{ $purchase->date_s }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $purchase->publisher }}</div>
                            <div class="col-6"><strong>Sarf Far3 Pill Num:</strong> {{ $purchase->sarf_far3_pill_num }}
                            </div>
                            <div class="col-6"><strong>Old:</strong> {{ $purchase->old ? 'Yes' : 'No' }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storepurchase.edit', $purchase->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storepurchase.destroy', $purchase->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
