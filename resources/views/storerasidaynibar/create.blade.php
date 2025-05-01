@extends('layouts.app')

@section('content')
    <h1>Add New Rasid Ayni Bar</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storerasidaynibar.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="main_branch_id_fk" class="form-label">Main Branch</label>
            <select class="form-select" id="main_branch_id_fk" name="main_branch_id_fk" required>
                <option value="">Select Main Branch</option>
                @foreach ($mainBranches as $branch)
                    <option value="{{ $branch->id }}" {{ old('main_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                        {{ $branch->name ?? ($branch->branch_name ?? 'Branch ' . $branch->id) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sub_branch_id_fk" class="form-label">Sub Branch</label>
            <select class="form-select" id="sub_branch_id_fk" name="sub_branch_id_fk" required>
                <option value="">Select Sub Branch</option>
                @foreach ($subBranches as $branch)
                    <option value="{{ $branch->id }}" {{ old('sub_branch_id_fk') == $branch->id ? 'selected' : '' }}>
                        {{ $branch->name ?? ($branch->branch_name ?? 'Branch ' . $branch->id) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required value="{{ old('date') }}">
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <select class="form-select" id="publisher" name="publisher" required>
                <option value="">Select Publisher</option>
                @foreach ($publishers as $user)
                    <option value="{{ $user->id }}" {{ old('publisher') == $user->id ? 'selected' : '' }}>
                        {{ $user->name ?? ($user->username ?? 'User ' . $user->id) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sanf_code" class="form-label">Item (Sanf)</label>
            <select class="form-select" id="sanf_code" name="sanf_code" required>
                <option value="">Select Item</option>
                @foreach ($items as $item)
                    <option value="{{ $item->sanf_code }}" {{ old('sanf_code') == $item->sanf_code ? 'selected' : '' }}>
                        {{ $item->sanf_name ?? ($item->name ?? 'Item ' . $item->sanf_code) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="sanf_amount" class="form-label">Item Amount</label>
            <input type="number" class="form-control" id="sanf_amount" name="sanf_amount" required
                value="{{ old('sanf_amount') }}" step="any" min="0">
        </div>

        <button type="submit" class="btn btn-primary">Add Rasid Ayni Bar</button>
        <a href="{{ route('storerasidaynibar.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
