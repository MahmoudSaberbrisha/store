@extends('layouts.app')

@section('content')
    <h1>Edit Supplier Voucher</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storesuppliervouchersother.update', $voucher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="field1" class="form-label">Field 1</label>
            <input type="text" class="form-control" id="field1" name="field1" required
                value="{{ old('field1', $voucher->field1) }}">
        </div>
        <div class="mb-3">
            <label for="field2" class="form-label">Field 2</label>
            <input type="number" class="form-control" id="field2" name="field2"
                value="{{ old('field2', $voucher->field2) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Supplier Voucher</button>
        <a href="{{ route('storesuppliervouchersother.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
