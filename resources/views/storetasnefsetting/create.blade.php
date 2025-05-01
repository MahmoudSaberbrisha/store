@extends('layouts.app')

@section('content')
    <h1>Add New Tasnef Setting</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storetasnefsetting.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="255"
                value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" maxlength="255"
                value="{{ old('type') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Tasnef Setting</button>
        <a href="{{ route('storetasnefsetting.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
