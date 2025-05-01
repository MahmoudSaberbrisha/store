@extends('layouts.app')

@section('content')
    <h1>Purchases Others Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $purchase->id }}
    </div>
    <div class="mb-3">
        <strong>Main Branch ID:</strong> {{ $purchase->main_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Sub Branch ID:</strong> {{ $purchase->sub_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Fatora Code:</strong> {{ $purchase->fatora_code }}
    </div>
    <div class="mb-3">
        <strong>Fatora Date:</strong> {{ $purchase->fatora_date ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Fatora Print Date:</strong> {{ $purchase->fatora_print_date ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Supplier Code:</strong> {{ $purchase->supplier_code ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Barcode:</strong> {{ $purchase->barcode ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Box ID:</strong> {{ $purchase->box_id_fk ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Box Name:</strong> {{ $purchase->box_name ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Storage ID:</strong> {{ $purchase->storage_id_fk ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Storage Name:</strong> {{ $purchase->storage_name ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Fatora Cost Before Discount:</strong> {{ $purchase->fatora_cost_before_discount ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Discount:</strong> {{ $purchase->discount ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Fatora Cost After Discount:</strong> {{ $purchase->fatora_cost_after_discount ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Paid Type:</strong> {{ $purchase->paid_type ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Dayen:</strong> {{ $purchase->dayen ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Paid:</strong> {{ $purchase->paid ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Remain:</strong> {{ $purchase->remain ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Sheek Num:</strong> {{ $purchase->sheek_num ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Sheek Status:</strong> {{ $purchase->sheek_status ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Sheek Value:</strong> {{ $purchase->sheek_value ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Recived Date:</strong> {{ $purchase->recived_date ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Accept Date:</strong> {{ $purchase->accept_date ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Byan:</strong> {{ $purchase->byan ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Marge3 Num:</strong> {{ $purchase->marge3_num ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Date S:</strong> {{ $purchase->date_s }}
    </div>
    <div class="mb-3">
        <strong>Date Ar:</strong> {{ $purchase->date_ar ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $purchase->publisher }}
    </div>
    <div class="mb-3">
        <strong>Deport:</strong> {{ $purchase->deport ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Had Back:</strong> {{ $purchase->had_back }}
    </div>
    <div class="mb-3">
        <strong>Had Back Reason:</strong> {{ $purchase->had_back_reason ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Had Back Date:</strong> {{ $purchase->had_back_date ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Had Back Date S:</strong> {{ $purchase->had_back_date_s ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Had Back Value:</strong> {{ $purchase->had_back_value ?? '' }}
    </div>
    <div class="mb-3">
        <strong>Type:</strong> {{ $purchase->type ?? '' }}
    </div>

    <a href="{{ route('storepurchasesothers.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storepurchasesothers.edit', $purchase->id) }}" class="btn btn-primary">Edit</a>
@endsection
