@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Return Purchases Items</h1>
        <a href="{{ route('storereturnpurchasesitem.create') }}" class="btn btn-primary">Add New Return Purchase Item</a>
    </div>

    <div class="row">
        @foreach ($items as $item)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storereturnpurchasesitem.show', $item->id) }}"
                            class="text-white text-decoration-none">
                            {{ $item->return_purchases_id }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $item->id }}</div>
                            <div class="col-6"><strong>Item Code:</strong> {{ $item->item_code }}</div>
                            <div class="col-6"><strong>Item Name:</strong> {{ $item->item_name }}</div>
                            <div class="col-6"><strong>One Price Buy:</strong> {{ $item->one_price_buy }}</div>
                            <div class="col-6"><strong>Return Amount:</strong> {{ $item->return_amount }}</div>
                            <div class="col-6"><strong>Price Return Amount:</strong> {{ $item->price_return_amount }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $item->date }}</div>
                            <div class="col-6"><strong>Date Ar:</strong> {{ $item->date_ar ?? '' }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $item->publisher }}</div>
                            <div class="col-6"><strong>Publisher Name:</strong> {{ $item->publisher_name ?? '' }}</div>
                            <div class="col-6"><strong>Sub Branch ID:</strong> {{ $item->sub_branch_id_fk }}</div>
                            <div class="col-6"><strong>Supplier Code:</strong> {{ $item->supplier_code }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storereturnpurchasesitem.edit', $item->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storereturnpurchasesitem.destroy', $item->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('Are you sure?');">
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
