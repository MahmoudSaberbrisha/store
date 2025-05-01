@extends('layouts.app')

@section('content')
    <h1>Tahwelat Asnaf Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $asnaf->id }}
    </div>
    <div class="mb-3">
        <strong>Rkm FK:</strong> {{ $asnaf->rkm_fk }}
    </div>
    <div class="mb-3">
        <strong>Sanf ID:</strong> {{ $asnaf->sanf_id }}
    </div>
    <div class="mb-3">
        <strong>Sanf Name:</strong> {{ $asnaf->sanf_n }}
    </div>
    <div class="mb-3">
        <strong>Sanf Code:</strong> {{ $asnaf->sanf_code }}
    </div>
    <div class="mb-3">
        <strong>Amount Motah:</strong> {{ $asnaf->amount_motah }}
    </div>
    <div class="mb-3">
        <strong>Amount Send:</strong> {{ $asnaf->amount_send }}
    </div>
    <div class="mb-3">
        <strong>From Storage:</strong> {{ $asnaf->from_storage }}
    </div>
    <div class="mb-3">
        <strong>To Storage:</strong> {{ $asnaf->to_storage }}
    </div>

    <a href="{{ route('storetahwelatasnaf.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('storetahwelatasnaf.edit', $asnaf->id) }}" class="btn btn-primary">Edit</a>
@endsection
