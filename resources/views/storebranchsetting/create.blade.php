@extends('layouts.app')

@section('content')
    <h1>Add New Branch Setting</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storebranchsetting.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required maxlength="15"
                    value="{{ old('title') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="br_code" class="form-label">Branch Code</label>
                <select class="form-select" id="br_code" name="br_code">
                    <option value="">Select Branch Code</option>
                    <option value="A" {{ old('br_code') == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ old('br_code') == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ old('br_code') == 'C' ? 'selected' : '' }}>C</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="from_id" class="form-label">Parent Branch</label>
                <select class="form-select" id="from_id" name="from_id">
                    <option value="">Select Parent Branch</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}" {{ old('from_id') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lat_map" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="lat_map" name="lat_map" maxlength="15"
                    value="{{ old('lat_map') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="long_map" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="long_map" name="long_map" maxlength="15"
                    value="{{ old('long_map') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Branch Setting</button>
        <a href="{{ route('storebranchsetting.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
