@extends('layouts.app')

@section('content')
<form action="{{ route('storestartotherfatora.update', $fatora->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="fatora_number" class="form-label">رقم الفاتورة</label>
        <input type="text" class="form-control" id="fatora_number" name="fatora_number" required maxlength="50"
            value="{{ old('fatora_number', $fatora->fatora_number) }}">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">التاريخ</label>
        <input type="date" class="form-control" id="date" name="date" required
            value="{{ old('date', $fatora->date) }}">
    </div>
    <div class="mb-3">
        <label for="supplier_name" class="form-label">اسم المورد</label>
        <input type="text" class="form-control" id="supplier_name" name="supplier_name" maxlength="100"
            value="{{ old('supplier_name', $fatora->supplier_name) }}">
    </div>
    <div class="mb-3">
        <label for="total_amount" class="form-label">المبلغ الإجمالي</label>
        <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount"
            value="{{ old('total_amount', $fatora->total_amount) }}">
    </div>
    <button type="submit" class="btn btn-primary">تحديث الفاتورة</button>
    <a href="{{ route('storestartotherfatora.index') }}" class="btn btn-secondary">إلغاء</a>
</form>
@endsection
