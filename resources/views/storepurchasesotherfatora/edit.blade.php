@extends('layouts.app')

@section('content')
    <h1>Edit Purchases Other Fatora</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storepurchasesotherfatora.update', $fatora->id) }}" method="POST">
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
            <label for="fatora_code" class="form-label">Fatora Code</label>
            <input type="number" class="form-control" id="fatora_code" name="fatora_code" required
                value="{{ old('fatora_code', $fatora->fatora_code) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_date" class="form-label">Fatora Date</label>
            <input type="date" class="form-control" id="fatora_date" name="fatora_date"
                value="{{ old('fatora_date', $fatora->fatora_date) }}">
        </div>
        <div class="mb-3">
            <label for="fatora_print_date" class="form-label">Fatora Print Date</label>
            <input type="date" class="form-control" id="fatora_print_date" name="fatora_print_date"
                value="{{ old('fatora_print_date', $fatora->fatora_print_date) }}">
        </div>
        <div class="mb-3">
            <label for="supplier_code" class="form-label">Supplier Code</label>
            <input type="number" class="form-control" id="supplier_code" name="supplier_code" required
                value="{{ old('supplier_code', $fatora->supplier_code) }}">
        </div>
        <div class="mb-3">
            <label for="barcode" class="form-label">Barcode</label>
            <input type="text" class="form-control" id="barcode" name="barcode"
                value="{{ old('barcode', $fatora->barcode) }}">
        </div>
        <div class="mb-3">
            <label for="box_id_fk" class="form-label">Box ID</label>
            <input type="number" class="form-control" id="box_id_fk" name="box_id_fk"
                value="{{ old('box_id_fk', $fatora->box_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="box_name" class="form-label">Box Name</label>
            <input type="text" class="form-control" id="box_name" name="box_name"
                value="{{ old('box_name', $fatora->box_name) }}">
        </div>
        <div class="mb-3">
            <label for="storage_id_fk" class="form-label">Storage ID</label>
            <input type="number" class="form-control" id="storage_id_fk" name="storage_id_fk"
                value="{{ old('storage_id_fk', $fatora->storage_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="storage_name" class="form-label">Storage Name</label>
            <input type="text" class="form-control" id="storage_name" name="storage_name"
                value="{{ old('storage_name', $fatora->storage_name) }}">
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
            <label for="dayen" class="form-label">Dayen</label>
            <input type="text" class="form-control" id="dayen" name="dayen"
                value="{{ old('dayen', $fatora->dayen) }}">
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
            <label for="sheek_num" class="form-label">Sheek Num</label>
            <input type="text" class="form-control" id="sheek_num" name="sheek_num"
                value="{{ old('sheek_num', $fatora->sheek_num) }}">
        </div>
        <div class="mb-3">
            <label for="sheek_status" class="form-label">Sheek Status</label>
            <input type="text" class="form-control" id="sheek_status" name="sheek_status"
                value="{{ old('sheek_status', $fatora->sheek_status) }}">
        </div>
        <div class="mb-3">
            <label for="sheek_value" class="form-label">Sheek Value</label>
            <input type="number" step="0.01" class="form-control" id="sheek_value" name="sheek_value"
                value="{{ old('sheek_value', $fatora->sheek_value) }}">
        </div>
        <div class="mb-3">
            <label for="recived_date" class="form-label">Recived Date</label>
            <input type="date" class="form-control" id="recived_date" name="recived_date"
                value="{{ old('recived_date', $fatora->recived_date) }}">
        </div>
        <div class="mb-3">
            <label for="accept_date" class="form-label">Accept Date</label>
            <input type="date" class="form-control" id="accept_date" name="accept_date"
                value="{{ old('accept_date', $fatora->accept_date) }}">
        </div>
        <div class="mb-3">
            <label for="byan" class="form-label">Byan</label>
            <input type="text" class="form-control" id="byan" name="byan"
                value="{{ old('byan', $fatora->byan) }}">
        </div>
        <div class="mb-3">
            <label for="marge3_num" class="form-label">Marge3 Num</label>
            <input type="text" class="form-control" id="marge3_num" name="marge3_num"
                value="{{ old('marge3_num', $fatora->marge3_num) }}">
        </div>
        <div class="mb-3">
            <label for="date_s" class="form-label">Date S (timestamp)</label>
            <input type="number" class="form-control" id="date_s" name="date_s" required
                value="{{ old('date_s', $fatora->date_s) }}">
        </div>
        <div class="mb-3">
            <label for="date_ar" class="form-label">Date Ar</label>
            <input type="text" class="form-control" id="date_ar" name="date_ar"
                value="{{ old('date_ar', $fatora->date_ar) }}">
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="number" class="form-control" id="publisher" name="publisher" required
                value="{{ old('publisher', $fatora->publisher) }}">
        </div>
        <div class="mb-3">
            <label for="deport" class="form-label">Deport</label>
            <input type="text" class="form-control" id="deport" name="deport"
                value="{{ old('deport', $fatora->deport) }}">
        </div>
        <div class="mb-3">
            <label for="had_back" class="form-label">Had Back</label>
            <input type="number" class="form-control" id="had_back" name="had_back" required
                value="{{ old('had_back', $fatora->had_back) }}">
        </div>
        <div class="mb-3">
            <label for="had_back_reason" class="form-label">Had Back Reason</label>
            <input type="text" class="form-control" id="had_back_reason" name="had_back_reason"
                value="{{ old('had_back_reason', $fatora->had_back_reason) }}">
        </div>
        <div class="mb-3">
            <label for="had_back_date" class="form-label">Had Back Date</label>
            <input type="date" class="form-control" id="had_back_date" name="had_back_date"
                value="{{ old('had_back_date', $fatora->had_back_date) }}">
        </div>
        <div class="mb-3">
            <label for="had_back_date_s" class="form-label">Had Back Date S (timestamp)</label>
            <input type="number" class="form-control" id="had_back_date_s" name="had_back_date_s"
                value="{{ old('had_back_date_s', $fatora->had_back_date_s) }}">
        </div>
        <div class="mb-3">
            <label for="had_back_value" class="form-label">Had Back Value</label>
            <input type="number" step="0.01" class="form-control" id="had_back_value" name="had_back_value"
                value="{{ old('had_back_value', $fatora->had_back_value) }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type"
                value="{{ old('type', $fatora->type) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Purchases Other Fatora</button>
        <a href="{{ route('storepurchasesotherfatora.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
