@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $fatora->fatora_number }}</h5>
        <p class="card-text"><strong>التاريخ:</strong> {{ $fatora->date }}</p>
        <p class="card-text"><strong>اسم المورد:</strong> {{ $fatora->supplier_name }}</p>
        <p class="card-text"><strong>المبلغ الإجمالي:</strong> {{ $fatora->total_amount }}</p>
        <a href="{{ route('storestartotherfatora.edit', $fatora->id) }}" class="btn btn-warning">تعديل</a>
        <a href="{{ route('storestartotherfatora.index') }}" class="btn btn-secondary">العودة إلى القائمة</a>
    </div>
</div>
@endsection
