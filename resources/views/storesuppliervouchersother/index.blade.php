@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Supplier Vouchers Other</h1>
        <a href="{{ route('storesuppliervouchersother.create') }}" class="btn btn-primary">Add New Voucher</a>
    </div>

    <div class="row">
        @foreach ($vouchers as $voucher)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <a href="{{ route('storesuppliervouchersother.show', $voucher->id) }}"
                            class="text-white text-decoration-none">
                            {{ $voucher->field1 }}
                        </a>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $voucher->id }}</div>
                            <div class="col-6"><strong>Field 2:</strong> {{ $voucher->field2 }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storesuppliervouchersother.edit', $voucher->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storesuppliervouchersother.destroy', $voucher->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
