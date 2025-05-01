@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tahwelat Asnaf</h1>
        <a href="{{ route('storetahwelatasnaf.create') }}" class="btn btn-primary">Add New Tahwelat Asnaf</a>
    </div>

    <div class="row">
        @foreach ($asnafs as $asnaf)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $asnaf->rkm_fk }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $asnaf->id }}</div>
                            <div class="col-6"><strong>Sanf ID:</strong> {{ $asnaf->sanf_id }}</div>
                            <div class="col-6"><strong>Sanf Name:</strong> {{ $asnaf->sanf_n }}</div>
                            <div class="col-6"><strong>Sanf Code:</strong> {{ $asnaf->sanf_code }}</div>
                            <div class="col-6"><strong>Amount Motah:</strong> {{ $asnaf->amount_motah }}</div>
                            <div class="col-6"><strong>Amount Send:</strong> {{ $asnaf->amount_send }}</div>
                            <div class="col-6"><strong>From Storage:</strong> {{ $asnaf->from_storage }}</div>
                            <div class="col-6"><strong>To Storage:</strong> {{ $asnaf->to_storage }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storetahwelatasnaf.show', $asnaf->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('storetahwelatasnaf.edit', $asnaf->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storetahwelatasnaf.destroy', $asnaf->id) }}" method="POST"
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
