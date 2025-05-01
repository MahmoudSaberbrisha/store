@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Items</h1>
        <a href="{{ route('storeitems.create') }}" class="btn btn-primary">Add New Item</a>
    </div>

    <div class="row">
        @foreach ($items as $item)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storeitems.show', $item->id) }}" class="text-white text-decoration-none">
                            {{ $item->name }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $item->id }}</div>
                            <div class="col-6"><strong>Code:</strong> {{ $item->sanf_code }}</div>
                            <div class="col-6"><strong>Type:</strong> {{ $item->sanf_type }}</div>
                            <div class="col-6"><strong>Main Branch:</strong> {{ $item->main_branch_id_fk }}</div>
                            <div class="col-6"><strong>Sub Branch:</strong> {{ $item->sub_branch_id_fk }}</div>
                            <div class="col-6"><strong>ID From:</strong> {{ $item->id_from }}</div>
                            <div class="col-6"><strong>Unit:</strong> {{ $item->unit }}</div>
                            <div class="col-6"><strong>Limit Order:</strong> {{ $item->limit_order }}</div>
                            <div class="col-6"><strong>Min Limit:</strong> {{ $item->min_limit }}</div>
                            <div class="col-6"><strong>All Buy Cost:</strong> {{ $item->all_buy_cost }}</div>
                            <div class="col-6"><strong>All Amount:</strong> {{ $item->all_amount }}</div>
                            <div class="col-6"><strong>One Buy Cost:</strong> {{ $item->one_buy_cost }}</div>
                            <div class="col-6"><strong>Customer Price Sale:</strong> {{ $item->customer_price_sale }}</div>
                            <div class="col-6"><strong>First Balance Period:</strong> {{ $item->first_balance_period }}</div>
                            <div class="col-6"><strong>Past Amount:</strong> {{ $item->past_amount }}</div>
                            <div class="col-6"><strong>Cost Past Amount:</strong> {{ $item->cost_past_amount }}</div>
                            <div class="col-6"><strong>Sanf Type Gym:</strong> {{ $item->sanf_type_gym }}</div>
                            <div class="col-6"><strong>Sale Price:</strong> {{ $item->sale_price }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storeitems.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storeitems.destroy', $item->id) }}" method="POST" class="d-inline"
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
