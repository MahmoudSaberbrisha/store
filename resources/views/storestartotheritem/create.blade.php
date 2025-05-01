@extends('layouts.app')

@section('content')
    <h1>إضافة عنصر جديد إلى بداية المخزن</h1>

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

    <form action="{{ route('storestartotheritem.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="main_branch" class="form-label">الفرع الرئيسي</label>
                <select class="form-select" id="main_branch" name="main_branch" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('main_branch') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="sub_branch" class="form-label">الفرع الفرعي</label>
                <select class="form-select" id="sub_branch" name="sub_branch" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('sub_branch') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="pill" class="form-label">الفاتورة</label>
                <input type="number" class="form-control" id="pill" name="pill" required value="{{ old('pill') }}">
            </div>
            <div class="col-md-6">
                <label for="sanf_code" class="form-label">كود الصنف</label>
                <input type="text" class="form-control" id="sanf_code" name="sanf_code" required maxlength="15"
                    value="{{ old('sanf_code') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="available_amount" class="form-label">الكمية المتوفرة</label>
                <input type="text" class="form-control" id="available_amount" name="available_amount" required maxlength="15"
                    value="{{ old('available_amount') }}">
            </div>
            <div class="col-md-6">
                <label for="one_buy_cost" class="form-label">تكلفة الشراء الواحدة</label>
                <input type="number" step="0.01" class="form-control" id="one_buy_cost" name="one_buy_cost" required
                    value="{{ old('one_buy_cost') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="amount" class="form-label">الكمية</label>
                <input type="text" class="form-control" id="amount" name="amount" required maxlength="15"
                    value="{{ old('amount') }}">
            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">التاريخ</label>
                <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="date_s" class="form-label">تاريخ إضافي</label>
                <input type="text" class="form-control" id="date_s" name="date_s" maxlength="15"
                    value="{{ old('date_s') }}">
            </div>
            <div class="col-md-6">
                <label for="old" class="form-label">قديم</label>
                <select class="form-select" id="old" name="old" required>
                    <option value="0" {{ old('old') == '0' ? 'selected' : '' }}>لا</option>
                    <option value="1" {{ old('old') == '1' ? 'selected' : '' }}>نعم</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">إضافة العنصر</button>
            <a href="{{ route('storestartotheritem.index') }}" class="btn btn-secondary">إلغاء</a>
        </div>
    </form>
@endsection
