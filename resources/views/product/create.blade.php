@extends('layouts.main')

{{--@section('pageTitle', _PAGE_TITLE_ )--}}

{{--@section('breadcrumbs')--}}
{{--    <a href="{{route('MODEL.index')}}" class="text-dark">_LINK_NAME_</a> / _PAGE_TITLE_ --}}
{{--@endsection--}}

@section('content')
    <div class="wrapsemibox">
        <div class="content p-3">
        @livewire('products.product-create')
        </div>
    </div>
@endsection
