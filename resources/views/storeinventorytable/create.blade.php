@extends('layouts.app')

@section('content')
    <h1>إضافة سجل جرد جديد</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                @if ($errors->has('error'))
                    <li>{{ $errors->first('error') }}</li>
                @endif
            </ul>
        </div>
    @endif

    <form action="{{ route('storeinventorytable.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="item_id_fk" class="form-label">العنصر</label>
                <select class="form-select" id="item_id_fk" name="item_id_fk" required>
                    <option value="">اختر العنصر</option>
                    @foreach ($items as $item)
                        <option value="{{ $item->id }}" {{ old('item_id_fk') == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="storage_id_fk" class="form-label">معرف التخزين</label>
                <input type="text" class="form-control" id="storage_id_fk" name="storage_id_fk" required maxlength="50"
                    value="{{ old('storage_id_fk') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="amount" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="amount" name="amount" required value="{{ old('amount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="num_invent" class="form-label">رقم الجرد</label>
                <input type="number" class="form-control" id="num_invent" name="num_invent" required
                    value="{{ old('num_invent') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="available_amount" class="form-label">الكمية المتوفرة</label>
                <input type="text" class="form-control" id="available_amount" name="available_amount" required maxlength="50"
                    value="{{ old('available_amount') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="invent_date" class="form-label">تاريخ الجرد</label>
                <input type="text" class="form-control" id="invent_date" name="invent_date" required maxlength="50"
                    value="{{ old('invent_date') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sanf_type_gym" class="form-label">نوع الصنف ( عنصر بحري)</label>
                <select class="form-select" id="sanf_type_gym" name="sanf_type_gym" required>
                    <option value="0" {{ old('sanf_type_gym') == '0' ? 'selected' : '' }}>لا</option>
                    <option value="1" {{ old('sanf_type_gym') == '1' ? 'selected' : '' }}>نعم</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="employee_id_fk" class="form-label">الموظف</label>
                <select class="form-select" id="employee_id_fk" name="employee_id_fk">
                    <option value="">اختر الموظف</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{ old('employee_id_fk') == $employee->id ? 'selected' : '' }}>
                            {{ $employee->name ?? $employee->id }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- أضف المزيد من الصفوف إذا لزم الأمر -->
        <button type="submit" class="btn btn-primary">إضافة الجرد</button>
        <a href="{{ route('storeinventorytable.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>
@endsection
