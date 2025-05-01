@extends('layouts.app')

@section('content')
    <h1>Edit Store Khazina</h1>

    <form action="{{ route('storekhazina.update', $storekhazina->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="main_branch_id_fk" class="form-label">Main Branch</label>
            <input type="number" class="form-control" id="main_branch_id_fk" name="main_branch_id_fk" required
                value="{{ old('main_branch_id_fk', $storekhazina->main_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch</label>
            <input type="number" class="form-control" id="sub_branch_id_fk" name="sub_branch_id_fk" required
                value="{{ old('sub_branch_id_fk', $storekhazina->sub_branch_id_fk) }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="255"
                value="{{ old('name', $storekhazina->name) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Store Khazina</button>
        <a href="{{ route('storekhazina.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
