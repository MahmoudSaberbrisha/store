@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Purchases Fatora</h1>
        <a href="{{ route('storepurchasesfatora.create') }}" class="btn btn-primary">Add New Purchases Fatora</a>
    </div>

    <div class="row">
        @foreach ($fatoras as $fatora)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storepurchasesfatora.show', $fatora->id) }}"
                            class="text-white text-decoration-none">
                            {{ $fatora->main_branch_id_fk }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $fatora->id }}</div>
                            <div class="col-6"><strong>Sub Branch ID:</strong> {{ $fatora->sub_branch_id_fk }}</div>
                            <div class="col-6"><strong>Fatora Date:</strong> {{ $fatora->fatora_date }}</div>
                            <div class="col-6"><strong>Supplier Code:</strong> {{ $fatora->supplier_code }}</div>
                            <div class="col-6"><strong>Fatora Cost Before Discount:</strong>
                                {{ $fatora->fatora_cost_before_discount }}</div>
                            <div class="col-6"><strong>Discount:</strong> {{ $fatora->discount }}</div>
                            <div class="col-6"><strong>Fatora Cost After Discount:</strong>
                                {{ $fatora->fatora_cost_after_discount }}</div>
                            <div class="col-6"><strong>Paid Type:</strong> {{ $fatora->paid_type }}</div>
                            <div class="col-6"><strong>Box Name:</strong> {{ $fatora->box_name }}</div>
                            <div class="col-6"><strong>Paid:</strong> {{ $fatora->paid }}</div>
                            <div class="col-6"><strong>Remain:</strong> {{ $fatora->remain }}</div>
                            <div class="col-6"><strong>Byan:</strong> {{ $fatora->byan }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $fatora->date }}</div>
                            <div class="col-6"><strong>Date S:</strong> {{ $fatora->date_s }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $fatora->publisher }}</div>
                            <div class="col-6"><strong>Had Back:</strong> {{ $fatora->had_back }}</div>
                            <div class="col-6"><strong>Sarf Far3 Pill Num:</strong> {{ $fatora->sarf_far3_pill_num }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storepurchasesfatora.edit', $fatora->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storepurchasesfatora.destroy', $fatora->id) }}" method="POST"
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
