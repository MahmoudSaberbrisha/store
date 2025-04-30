@extends('layouts.app')

@section('content')
    <h1>Edit Branch Setting</h1>

    <form action="{{ route('storebranchsetting.update', $branchsetting->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Branch Name</label>
            <input type="text" class="form-control" id="title" name="title" required maxlength="15"
                value="{{ old('title', $branchsetting->title) }}">
        </div>
        <div class="mb-3">
            <label for="br_code" class="form-label">Branch Code</label>
            <select class="form-select" id="br_code" name="br_code">
                <option value="" {{ old('br_code', $branchsetting->br_code) == '' ? 'selected' : '' }}>None</option>
                <option value="A" {{ old('br_code', $branchsetting->br_code) == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('br_code', $branchsetting->br_code) == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ old('br_code', $branchsetting->br_code) == 'C' ? 'selected' : '' }}>C</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="from_id" class="form-label">Parent Branch</label>
            <select class="form-select" id="from_id" name="from_id">
                <option value="" {{ old('from_id', $branchsetting->from_id) == '' ? 'selected' : '' }}>None</option>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}"
                        {{ old('from_id', $branchsetting->from_id) == $branch->id ? 'selected' : '' }}>
                        {{ $branch->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="lat_map" class="form-label">Latitude</label>
            <input type="text" class="form-control" id="lat_map" name="lat_map" maxlength="15"
                value="{{ old('lat_map', $branchsetting->lat_map) }}">
        </div>
        <div class="mb-3">
            <label for="long_map" class="form-label">Longitude</label>
            <input type="text" class="form-control" id="long_map" name="long_map" maxlength="15"
                value="{{ old('long_map', $branchsetting->long_map) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Branch Setting</button>
        <a href="{{ route('storebranchsetting.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
