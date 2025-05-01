@extends('layouts.app')

@section('content')
    <h1>Edit Purchases Fatora</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storepurchasesfatora.update', $fatora->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="main_branch_id_fk" class="form-label">Main Branch ID</label>
            <input type="number" class="form-control" id="main_branch_id_fk" name="main_branch_id_fk" required
                value="{{ old('main_branch_id_fk', $fatora->main_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch ID</label>
            <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                value="{{ old('sub_branch_id_fk', $fatora->sub_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_date" class="form-label">Fatora Date</label>
            <input type="date" class="form-control" id="fatora_date" name="fatora_date"
                value="{{ old('fatora_date', $fatora->fatora_date) }}">
        </div>
        <div class="mb-3">
            <label for="supplier_code" class="form-label">Supplier Code</label>
            <input type="number" class="form-control" id="supplier_code" name="supplier_code" required
                value="{{ old('supplier_code', $fatora->supplier_code) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_cost_before_discount" class="form-label">Fatora Cost Before Discount</label>
            <input type="number" step="0.01" class="form-control" id="fatora_cost_before_discount"
                name="fatora_cost_before_discount" required
                value="{{ old('fatora_cost_before_discount', $fatora->fatora_cost_before_discount) }}">
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" step="0.01" class="form-control" id="discount" name="discount"
                value="{{ old('discount', $fatora->discount) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_cost_after_discount" class="form-label">Fatora Cost After Discount</label>
            <input type="number" step="0.01" class="form-control" id="fatora_cost_after_discount"
                name="fatora_cost_after_discount" required
                value="{{ old('fatora_cost_after_discount', $fatora->fatora_cost_after_discount) }}">
        </div>
        <div class="mb-3">
            <label for="paid_type" class="form-label">Paid Type</label>
            <input type="number" class="form-control" id="paid_type" name="paid_type" required
                value="{{ old('paid_type', $fatora->paid_type) }}">
        </div>
        <div class="mb-3">
            <label for="box_name" class="form-label">Box Name</label>
            <input type="number" class="form-control" id="box_name" name="box_name" required
                value="{{ old('box_name', $fatora->box_name) }}">
        </div>
        <div class="mb-3">
            <label for="paid" class="form-label">Paid</label>
            <input type="number" step="0.01" class="form-control" id="paid" name="paid" required
                value="{{ old('paid', $fatora->paid) }}">
        </div>
        <div class="mb-3">
            <label for="remain" class="form-label">Remain</label>
            <input type="number" step="0.01" class="form-control" id="remain" name="remain" required
                value="{{ old('remain', $fatora->remain) }}">
        </div>
        <div class="mb-3">
            <label for="byan" class="form-label">Byan</label>
            <input type="text" class="form-control" id="byan" name="byan"
                value="{{ old('byan', $fatora->byan) }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date (timestamp)</label>
            <input type="number" class="form-control" id="date" name="date" required
                value="{{ old('date', $fatora->date) }}">
        </div>
        <div class="mb-3">
            <label for="date_s" class="form-label">Date S (timestamp)</label>
            <input type="number" class="form-control" id="date_s" name="date_s" required
                value="{{ old('date_s', $fatora->date_s) }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="number" class="form-control" id="publisher" name="publisher" required
                value="{{ old('publisher', $fatora->publisher) }}">
        </div>
        <div class="mb-3">
            <label for="had_back" class="form-label">Had Back</label>
            <input type="number" class="form-control" id="had_back" name="had_back" required
                value="{{ old('had_back', $fatora->had_back) }}">
        </div>
        <div class="mb-3">
            <label for="sarf_far3_pill_num" class="form-label">Sarf Far3 Pill Num</label>
            <input type="text" class="form-control" id="sarf_far3_pill_num" name="sarf_far3_pill_num"
                value="{{ old('sarf_far3_pill_num', $fatora->sarf_far3_pill_num) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Purchases Fatora</button>
        <a href="{{ route('storepurchasesfatora.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
