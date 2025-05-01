@extends('layouts.app')

@section('content')
    <h1>إضافة تخزين آخر جديد</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storeotherstorage.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">العنوان</label>
                <input type="text" class="form-control" id="title" name="title" required maxlength="15"
                    value="{{ old('title') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="from_id_fk" class="form-label">من الفرع</label>
                <select class="form-select" id="from_id_fk" name="from_id_fk" required>
                    <option value="">اختر الفرع</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('from_id_fk') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary me-2">إضافة التخزين</button>
            <a href="{{ route('storeotherstorage.index') }}" class="btn btn-secondary">إلغاء</a>
        </div>
    </form>
@endsection
