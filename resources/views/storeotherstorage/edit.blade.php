@extends('layouts.app')

@section('content')
    <h1>Edit Other Storage</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storeotherstorage.update', $storage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required maxlength="15"
                value="{{ old('title', $storage->title) }}">
        </div>
        <div class="mb-3">
            <label for="from_id_fk" class="form-label">From Branch</label>
            <input type="number" class="form-control" id="from_id_fk" name="from_id_fk" required
                value="{{ old('from_id_fk', $storage->from_id_fk) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Storage</button>
        <a href="{{ route('storeotherstorage.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
