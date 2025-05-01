@extends('layouts.app')

@section('content')
    <h1>إضافة سعر جديد لصنف المتجر</h1>

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

    <form action="{{ route('storeallitemsprices.store') }}" method="POST" class="p-4 border rounded shadow-sm form-container">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="publisher" class="form-label">الناشر</label>
                <select class="form-select form-control-3d" id="publisher" name="publisher" onchange="fillPublisherName()">
                    <option value="">اختر الناشر</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" data-name="{{ $user->name }}"
                            {{ old('publisher') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="publisher_name" class="form-label">اسم الناشر</label>
                <input type="text" class="form-control form-control-3d" id="publisher_name" name="publisher_name"
                    maxlength="15" value="{{ old('publisher_name') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="sanf_code" class="form-label">كود الصنف</label>
                <select class="form-select form-control-3d" id="sanf_code" name="sanf_code" onchange="fillSanfName()">
                    <option value="">اختر كود الصنف</option>
                    @foreach ($storeItems as $item)
                        <option value="{{ $item->sanf_code }}" data-name="{{ $item->name }}"
                            {{ old('sanf_code') == $item->sanf_code ? 'selected' : '' }}>
                            {{ $item->sanf_code }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sanf_name" class="form-label">اسم الصنف</label>
                <input type="text" class="form-control form-control-3d" id="name" name="sanf_name" maxlength="50"
                    value="{{ old('sanf_name') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date_ar" class="form-label">التاريخ</label>
                <input type="date" class="form-control form-control-3d" id="date_ar" name="date_ar" maxlength="15"
                    value="{{ old('date_ar') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="update_time" class="form-label">وقت التحديث</label>
                <input type="time" class="form-control form-control-3d" id="update_time" name="update_time" maxlength="15"
                    value="{{ old('update_time') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="new_price" class="form-label">السعر الجديد</label>
                <input type="number" class="form-control form-control-3d" id="new_price" name="new_price" step="0.01"
                    value="{{ old('new_price') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="old_price" class="form-label">السعر القديم</label>
                <input type="number" class="form-control form-control-3d" id="old_price" name="old_price" step="0.01"
                    value="{{ old('old_price') }}">
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary btn-custom">إضافة سجل السعر</button>
            <a href="{{ route('storeallitemsprices.index') }}" class="btn btn-secondary btn-custom-cancel">إلغاء</a>
        </div>
    </form>

    <script>
        function fillPublisherName() {
            var select = document.getElementById('publisher');
            var selectedOption = select.options[select.selectedIndex];
            var publisherNameInput = document.getElementById('publisher_name');
            if (selectedOption && selectedOption.dataset.name) {
                publisherNameInput.value = selectedOption.dataset.name;
            } else {
                publisherNameInput.value = '';
            }
        }

        function fillSanfName() {
            var select = document.getElementById('sanf_code');
            var selectedOption = select.options[select.selectedIndex];
            var sanfNameInput = document.getElementById('name');
            if (selectedOption && selectedOption.dataset.name) {
                sanfNameInput.value = selectedOption.dataset.name;
            } else {
                sanfNameInput.value = '';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            fillPublisherName();
            fillSanfName();
        });
    </script>
@endsection
