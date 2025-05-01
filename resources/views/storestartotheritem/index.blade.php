@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Viewed Items</h1>
        <a href="{{ route('storestartotheritem.create') }}" class="btn btn-primary">Add New Item</a>
    </div>

    <div class="row">
        @foreach ($items as $item)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $item->sanf_code }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>ID:</strong> {{ $item->id }}</div>
                            <div class="col-6"><strong>Main Branch:</strong> {{ $item->main_branch }}</div>
                            <div class="col-6"><strong>Sub Branch:</strong> {{ $item->sub_branch }}</div>
                            <div class="col-6"><strong>Pill:</strong> {{ $item->pill }}</div>
                            <div class="col-6"><strong>Available Amount:</strong> {{ $item->available_amount }}</div>
                            <div class="col-6"><strong>One Buy Cost:</strong> {{ $item->one_buy_cost }}</div>
                            <div class="col-6"><strong>Amount:</strong> {{ $item->amount }}</div>
                            <div class="col-6"><strong>Date:</strong> {{ $item->date }}</div>
                            <div class="col-6"><strong>Date S:</strong> {{ $item->date_s }}</div>
                            <div class="col-6"><strong>Old:</strong> {{ $item->old ? 'Yes' : 'No' }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storestartotheritem.edit', $item->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('storestartotheritem.destroy', $item->id) }}" method="POST"
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
