@extends('layouts.app')

@section('content')
    <h1>Store Start Other Item Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text"><strong>Code:</strong> {{ $item->sanf_code }}</p>
            <p class="card-text"><strong>Type:</strong> {{ $item->sanf_type }}</p>
            <p class="card-text"><strong>Unit:</strong> {{ $item->unit }}</p>
            <p class="card-text"><strong>Sale Price:</strong> {{ $item->sale_price }}</p>
            <a href="{{ route('storestartotheritem.edit', $item->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('storestartotheritem.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
