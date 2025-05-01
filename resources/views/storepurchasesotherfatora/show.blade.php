@extends('layouts.app')

@section('content')
    <h1>Purchases Other Fatora Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $fatora->id }}
    </div>
    <div class="mb-3">
        <strong>Main Branch ID:</strong> {{ $fatora->main_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Sub Branch ID:</strong> {{ $fatora->sub_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Fatora Code:</strong> {{ $fatora->fatora_code }}
    </div>
    <div class="mb-3">
        <strong>Fatora Date:</strong> {{ $fatora->fatora_date }}
    </div>
    <div class="mb-3">
        <strong>Fatora Print Date:</strong> {{ $fatora->fatora_print_date }}
    </div>
    <div class="mb-3">
        <strong>Supplier Code:</strong> {{ $fatora->supplier_code }}
    </div>
    <div class="mb-3">
        <strong>Barcode:</strong> {{ $fatora->barcode }}
    </div>
    <div class="mb-3">
        <strong>Box ID:</strong> {{ $fatora->box_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Box Name:</strong> {{ $fatora->box_name }}
    </div>
    <div class="mb-3">
        <strong>Storage ID:</strong> {{ $fatora->storage_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Storage Name:</strong> {{ $fatora->storage_name }}
    </div>
    <div class="mb-3">
        <strong>Fatora Cost Before Discount:</strong> {{ $fatora->fatora_cost_before_discount }}
    </div>
    <div class="mb-3">
        <strong>Discount:</strong> {{ $fatora->discount }}
    </div>
    <div class="mb-3">
        <strong>Fatora Cost After Discount:</strong> {{ $fatora->fatora_cost_after_discount }}
    </div>
    <div class="mb-3">
        <strong>Paid Type:</strong> {{ $fatora->paid_type }}
    </div>
    <div class="mb-3">
        <strong>Dayen:</strong> {{ $fatora->dayen }}
    </div>
    <div class="mb-3">
        <strong>Paid:</strong> {{ $fatora->paid }}
    </div>
    <div class="mb-3">
        <strong>Remain:</strong> {{ $fatora->remain }}
    </div>
    <div class="mb-3">
        <strong>Sheek Num:</strong> {{ $fatora->sheek_num }}
    </div>
    <div class="mb-3">
        <strong>Sheek Status:</strong> {{ $fatora->sheek_status }}
    </div>
    <div class="mb-3">
        <strong>Sheek Value:</strong> {{ $fatora->sheek_value }}
    </div>
    <div class="mb-3">
        <strong>Recived Date:</strong> {{ $fatora->recived_date }}
    </div>
    <div class="mb-3">
        <strong>Accept Date:</strong> {{ $fatora->accept_date }}
    </div>
    <div class="mb-3">
        <strong>Byan:</strong> {{ $fatora->byan }}
    </div>
    <div class="mb-3">
        <strong>Marge3 Num:</strong> {{ $fatora->marge3_num }}
    </div>
    <div class="mb-3">
        <strong>Date S:</strong> {{ $fatora->date_s }}
    </div>
    <div class="mb-3">
        <strong>Date Ar:</strong> {{ $fatora->date_ar }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $fatora->publisher }}
    </div>
    <div class="mb-3">
        <strong>Deport:</strong> {{ $fatora->deport }}
    </div>
    <div class="mb-3">
        <strong>Had Back:</strong> {{ $fatora->had_back }}
    </div>
    <div class="mb-3">
        <strong>Had Back Reason:</strong> {{ $fatora->had_back_reason }}
    </div>
    <div class="mb-3">
        <strong>Had Back Date:</strong> {{ $fatora->had_back_date }}
    </div>
    <div class="mb-3">
        <strong>Had Back Date S:</strong> {{ $fatora->had_back_date_s }}
    </div>
    <div class="mb-3">
        <strong>Had Back Value:</strong> {{ $fatora->had_back_value }}
    </div>
    <div class="mb-3">
        <strong>Type:</strong> {{ $fatora->type }}
    </div>

    <a href="{{ route('storepurchasesotherfatora.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storepurchasesotherfatora.edit', $fatora->id) }}" class="btn btn-primary">Edit</a>
@endsection
