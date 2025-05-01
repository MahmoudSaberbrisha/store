@extends('layouts.app')

@section('content')
    <h1>Purchases Fatora Details</h1>

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
        <strong>Fatora Date:</strong> {{ $fatora->fatora_date }}
    </div>
    <div class="mb-3">
        <strong>Supplier Code:</strong> {{ $fatora->supplier_code }}
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
        <strong>Box Name:</strong> {{ $fatora->box_name }}
    </div>
    <div class="mb-3">
        <strong>Paid:</strong> {{ $fatora->paid }}
    </div>
    <div class="mb-3">
        <strong>Remain:</strong> {{ $fatora->remain }}
    </div>
    <div class="mb-3">
        <strong>Byan:</strong> {{ $fatora->byan }}
    </div>
    <div class="mb-3">
        <strong>Date:</strong> {{ $fatora->date }}
    </div>
    <div class="mb-3">
        <strong>Date S:</strong> {{ $fatora->date_s }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $fatora->publisher }}
    </div>
    <div class="mb-3">
        <strong>Had Back:</strong> {{ $fatora->had_back }}
    </div>
    <div class="mb-3">
        <strong>Sarf Far3 Pill Num:</strong> {{ $fatora->sarf_far3_pill_num }}
    </div>

    <a href="{{ route('storepurchasesfatora.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storepurchasesfatora.edit', $fatora->id) }}" class="btn btn-primary">Edit</a>
@endsection
