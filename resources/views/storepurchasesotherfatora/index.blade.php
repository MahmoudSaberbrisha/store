@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Store Purchases Other Fatora</h1>
        <a href="{{ route('storepurchasesotherfatora.create') }}" class="btn btn-primary">Add New Purchases Other Fatora</a>
    </div>

    <div class="row">
        @foreach ($fatoras as $fatora)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storepurchasesotherfatora.show', $fatora->id) }}"
                            class="text-white text-decoration-none">
                            {{ $fatora->main_branch_id_fk }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $fatora->id }}</div>
                            <div class="col-6"><strong>Sub Branch ID:</strong> {{ $fatora->sub_branch_id_fk }}</div>
                            <div class="col-6"><strong>Fatora Code:</strong> {{ $fatora->fatora_code }}</div>
                            <div class="col-6"><strong>Fatora Date:</strong> {{ $fatora->fatora_date }}</div>
                            <div class="col-6"><strong>Fatora Print Date:</strong> {{ $fatora->fatora_print_date }}</div>
                            <div class="col-6"><strong>Supplier Code:</strong> {{ $fatora->supplier_code }}</div>
                            <div class="col-6"><strong>Barcode:</strong> {{ $fatora->barcode }}</div>
                            <div class="col-6"><strong>Box ID:</strong> {{ $fatora->box_id_fk }}</div>
                            <div class="col-6"><strong>Box Name:</strong> {{ $fatora->box_name }}</div>
                            <div class="col-6"><strong>Storage ID:</strong> {{ $fatora->storage_id_fk }}</div>
                            <div class="col-6"><strong>Storage Name:</strong> {{ $fatora->storage_name }}</div>
                            <div class="col-6"><strong>Fatora Cost Before Discount:</strong>
                                {{ $fatora->fatora_cost_before_discount }}</div>
                            <div class="col-6"><strong>Discount:</strong> {{ $fatora->discount }}</div>
                            <div class="col-6"><strong>Fatora Cost After Discount:</strong>
                                {{ $fatora->fatora_cost_after_discount }}</div>
                            <div class="col-6"><strong>Paid Type:</strong> {{ $fatora->paid_type }}</div>
                            <div class="col-6"><strong>Dayen:</strong> {{ $fatora->dayen }}</div>
                            <div class="col-6"><strong>Paid:</strong> {{ $fatora->paid }}</div>
                            <div class="col-6"><strong>Remain:</strong> {{ $fatora->remain }}</div>
                            <div class="col-6"><strong>Sheek Num:</strong> {{ $fatora->sheek_num }}</div>
                            <div class="col-6"><strong>Sheek Status:</strong> {{ $fatora->sheek_status }}</div>
                            <div class="col-6"><strong>Sheek Value:</strong> {{ $fatora->sheek_value }}</div>
                            <div class="col-6"><strong>Recived Date:</strong> {{ $fatora->recived_date }}</div>
                            <div class="col-6"><strong>Accept Date:</strong> {{ $fatora->accept_date }}</div>
                            <div class="col-6"><strong>Byan:</strong> {{ $fatora->byan }}</div>
                            <div class="col-6"><strong>Marge3 Num:</strong> {{ $fatora->marge3_num }}</div>
                            <div class="col-6"><strong>Date S:</strong> {{ $fatora->date_s }}</div>
                            <div class="col-6"><strong>Date Ar:</strong> {{ $fatora->date_ar }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $fatora->publisher }}</div>
                            <div class="col-6"><strong>Deport:</strong> {{ $fatora->deport }}</div>
                            <div class="col-6"><strong>Had Back:</strong> {{ $fatora->had_back }}</div>
                            <div class="col-6"><strong>Had Back Reason:</strong> {{ $fatora->had_back_reason }}</div>
                            <div class="col-6"><strong>Had Back Date:</strong> {{ $fatora->had_back_date }}</div>
                            <div class="col-6"><strong>Had Back Date S:</strong> {{ $fatora->had_back_date_s }}</div>
                            <div class="col-6"><strong>Had Back Value:</strong> {{ $fatora->had_back_value }}</div>
                            <div class="col-6"><strong>Type:</strong> {{ $fatora->type }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storepurchasesotherfatora.edit', $fatora->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storepurchasesotherfatora.destroy', $fatora->id) }}" method="POST"
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
