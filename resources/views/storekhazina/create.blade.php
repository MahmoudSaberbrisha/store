@extends('layouts.app')

@section('content')
    <h1>إضافة خزينة جديدة</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storekhazina.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="main_branch_id_fk" class="form-label">الفرع الرئيسي</label>
                <select class="form-select" id="main_branch_id_fk" name="main_branch_id_fk" required>
                    <option value="">اختر الفرع الرئيسي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('main_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sub_branch_id_fk" class="form-label">الفرع الفرعي</label>
                <select class="form-select" id="sub_branch_id_fk" name="sub_branch_id_fk" required>
                    <option value="">اختر الفرع الفرعي</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('sub_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="name" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name" name="name" required maxlength="255"
                    value="{{ old('name') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">إضافة خزينة</button>
                <a href="{{ route('storekhazina.index') }}" class="btn btn-secondary">إلغاء</a>
            </div>
        </div>
    </form>
@endsection
