@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('storestartotherfatora.create') }}" class="btn btn-primary">إضافة فاتورة جديدة</a>
    </div>

    <div class="row">
        @foreach ($fatoras as $fatora)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 shadow-sm p-2">
                    <div class="card-header bg-primary text-white py-1 px-2">
                        <strong>{{ $fatora->pill_num }}</strong>
                    </div>
                    <div class="card-body p-2">
                        <div class="row g-2">
                            <div class="col-6"><strong>المعرف:</strong> {{ $fatora->id }}</div>
                            <div class="col-6"><strong>الفرع الرئيسي:</strong> {{ $fatora->main_branch }}</div>
                            <div class="col-6"><strong>الفرع الفرعي:</strong> {{ $fatora->sub_branch }}</div>
                            <div class="col-6"><strong>المبلغ الكلي:</strong> {{ $fatora->all_amount }}</div>
                            <div class="col-6"><strong>التكلفة الكلية:</strong> {{ $fatora->all_cost }}</div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between py-1 px-2">
                        <a href="{{ route('storestartotherfatora.edit', $fatora->id) }}"
                            class="btn btn-sm btn-warning">تعديل</a>
                        <form action="{{ route('storestartotherfatora.destroy', $fatora->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('هل أنت متأكد؟');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">حذف</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
