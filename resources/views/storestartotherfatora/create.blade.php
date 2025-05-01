@extends('layouts.app')

@section('content')
<form action="{{ route('storestartotherfatora.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="main_branch" class="form-label">الفرع الرئيسي</label>
            <select class="form-control" id="main_branch" name="main_branch" required>
                <option value="">اختر الفرع الرئيسي</option>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}" {{ old('main_branch') == $branch->id ? 'selected' : '' }}>{{ $branch->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="sub_branch" class="form-label">الفرع الفرعي</label>
            <select class="form-control" id="sub_branch" name="sub_branch" required>
                <option value="">اختر الفرع الفرعي</option>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}" {{ old('sub_branch') == $branch->id ? 'selected' : '' }}>{{ $branch->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="pill_num" class="form-label">رقم الفاتورة</label>
            <input type="text" class="form-control" id="pill_num" name="pill_num" readonly value="{{ old('pill_num', isset($pill_num) ? $pill_num : '') }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="all_amount" class="form-label">إجمالي الكمية</label>
            <input type="text" class="form-control" id="all_amount" name="all_amount" required maxlength="15" value="{{ old('all_amount') }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="all_cost" class="form-label">إجمالي التكلفة</label>
            <input type="number" step="0.01" class="form-control" id="all_cost" name="all_cost" required value="{{ old('all_cost') }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary"  >إضافة الفاتورة</button>
            <a href="{{ route('storestartotherfatora.index') }}" class="btn btn-secondary">إلغاء</a>
        </div>
    </div>
</form>
@endsection
