@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Rasid Ayni</h1>
        <a href="{{ route('storerasidayni.create') }}" class="btn btn-primary">Add New Rasid Ayni</a>
    </div>

    <div class="row">
        @foreach ($rasidayni as $record)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $record->main_branch_id_fk }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $record->id }}</div>
                            <div class="col-6"><strong>Sub Branch ID:</strong> {{ $record->sub_branch_id_fk }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $record->date }}</div>
                            <div class="col-6"><strong>Date AR:</strong> {{ $record->date_ar }}</div>
                            <div class="col-6"><strong>Publisher Name:</strong> {{ $record->publisher_name }}</div>
                            <div class="col-6"><strong>Publisher:</strong> {{ $record->publisher }}</div>
                            <div class="col-6"><strong>Sanf Code:</strong> {{ $record->sanf_code }}</div>
                            <div class="col-6"><strong>Sanf ID:</strong> {{ $record->sanf_id }}</div>
                            <div class="col-6"><strong>Sanf Name:</strong> {{ $record->sanf_name }}</div>
                            <div class="col-6"><strong>Sanf Amount:</strong> {{ $record->sanf_amount }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storerasidayni.show', $record->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storerasidayni.edit', $record->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storerasidayni.destroy', $record->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?');">
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
