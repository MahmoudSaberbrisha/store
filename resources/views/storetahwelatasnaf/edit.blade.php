@extends('layouts.app')

@section('content')
    <h1>Edit Tahwelat Asnaf</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storetahwelatasnaf.update', $asnaf->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="rkm_fk" class="form-label">Rkm FK</label>
            <input type="number" class="form-control" id="rkm_fk" name="rkm_fk" required
                value="{{ old('rkm_fk', $asnaf->rkm_fk) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_id" class="form-label">Sanf ID</label>
            <input type="number" class="form-control" id="sanf_id" name="sanf_id" required
                value="{{ old('sanf_id', $asnaf->sanf_id) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_n" class="form-label">Sanf Name</label>
            <input type="text" class="form-control" id="sanf_n" name="sanf_n" required maxlength="255"
                value="{{ old('sanf_n', $asnaf->sanf_n) }}">
        </div>
        <div class="mb-3">
            <label for="sanf_code" class="form-label">Sanf Code</label>
            <input type="number" class="form-control" id="sanf_code" name="sanf_code" required
                value="{{ old('sanf_code', $asnaf->sanf_code) }}">
        </div>
        <div class="mb-3">
            <label for="amount_motah" class="form-label">Amount Motah</label>
            <input type="number" class="form-control" id="amount_motah" name="amount_motah" required
                value="{{ old('amount_motah', $asnaf->amount_motah) }}">
        </div>
        <div class="mb-3">
            <label for="amount_send" class="form-label">Amount Send</label>
            <input type="number" class="form-control" id="amount_send" name="amount_send" required
                value="{{ old('amount_send', $asnaf->amount_send) }}">
        </div>
        <div class="mb-3">
            <label for="from_storage" class="form-label">From Storage</label>
            <input type="number" class="form-control" id="from_storage" name="from_storage" required
                value="{{ old('from_storage', $asnaf->from_storage) }}">
        </div>
        <div class="mb-3">
            <label for="to_storage" class="form-label">To Storage</label>
            <input type="number" class="form-control" id="to_storage" name="to_storage" required
                value="{{ old('to_storage', $asnaf->to_storage) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Tahwelat Asnaf</button>
        <a href="{{ route('storetahwelatasnaf.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
