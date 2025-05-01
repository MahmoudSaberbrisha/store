@extends('layouts.app')

@section('content')
    <h1>Supplier Voucher Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $voucher->id }}
    </div>
    <div class="mb-3">
        <strong>Field 1:</strong> {{ $voucher->field1 }}
    </div>
    <div class="mb-3">
        <strong>Field 2:</strong> {{ $voucher->field2 }}
    </div>

    <a href="{{ route('storesuppliervouchersother.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storesuppliervouchersother.edit', $voucher->id) }}" class="btn btn-primary">Edit</a>
@endsection
