@extends('layouts.app')

@section('content')
    <h1>Edit Other Supplier</h1>

    <form action="{{ route('storeothersupplier.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Supplier Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="100"
                value="{{ old('name', $supplier->name) }}">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" maxlength="100"
                value="{{ old('contact', $supplier->contact) }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $supplier->address) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Supplier</button>
        <a href="{{ route('storeothersupplier.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
