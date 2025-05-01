@extends('layouts.app')

@section('content')
    <h1>Rasid Ayni Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $record->id }}
    </div>
    <div class="mb-3">
        <strong>Main Branch ID:</strong> {{ $record->main_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Sub Branch ID:</strong> {{ $record->sub_branch_id_fk }}
    </div>
    <div class="mb-3">
        <strong>Date:</strong> {{ $record->date }}
    </div>
    <div class="mb-3">
        <strong>Date AR:</strong> {{ $record->date_ar }}
    </div>
    <div class="mb-3">
        <strong>Publisher Name:</strong> {{ $record->publisher_name }}
    </div>
    <div class="mb-3">
        <strong>Publisher:</strong> {{ $record->publisher }}
    </div>
    <div class="mb-3">
        <strong>Sanf Code:</strong> {{ $record->sanf_code }}
    </div>
    <div class="mb-3">
        <strong>Sanf ID:</strong> {{ $record->sanf_id }}
    </div>
    <div class="mb-3">
        <strong>Sanf Name:</strong> {{ $record->sanf_name }}
    </div>
    <div class="mb-3">
        <strong>Sanf Amount:</strong> {{ $record->sanf_amount }}
    </div>

    <a href="{{ route('storerasidayni.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storerasidayni.edit', $record->id) }}" class="btn btn-primary">Edit</a>
@endsection
