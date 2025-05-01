@extends('layouts.app')

@section('content')
    <h1>Return Purchases Item Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $item->id }}
    </div>
    <div class="mb-3">
        <strong>Return Purchases ID:</strong> {{ $item->return_purchases_id }}
    </div>
    <div class="mb-3">
        <strong>Item Code:</strong> {{ $item->item_code }}
    </div>
    <div class="mb-3">
        <strong>Item Name:</strong> {{ $item->item_name }}
    </div>
    <div class="mb-3">
        <strong>One Price Buy:</strong> {{ $item->one_price_buy }}
    </div>
    <div class="mb-3">
        <strong>Return Amount:</strong> {{ $item->return_amount }}
    </div>
    <div class="mb-3">
        <strong>Price Return Amount:</strong> {{ $item->price_return_amount }}
    </div>
    <div class="mb-3">
        <strong>Date:</strong> {{ $item->date }}
    </div>
    <div class="mb-3">
        <strong>Date Ar:</strong> {{ $item->date_ar ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $item->publisher }}
    </div>
    <div class="mb-3">
        <strong>Publisher Name:</strong> {{ $item->publisher_name ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Sub Branch ID:</strong> {{ $item->sub_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Supplier Code:</strong> {{ $item->supplier_code }}
    </div>

    <a href="{{ route('storereturnpurchasesitem.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storereturnpurchasesitem.edit', $item->id) }}" class="btn btn-primary">Edit</a>
@endsection
