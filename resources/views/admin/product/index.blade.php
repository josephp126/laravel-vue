@extends('admin.layouts.main-admin')

{{--@section('pageTitle', _PAGE_TITLE_ )--}}

{{--@section('breadcrumbs')--}}
{{--    <a href="{{route('MODEL.index')}}" class="text-dark">_LINK_NAME_</a> / _PAGE_TITLE_ --}}
{{--@endsection--}}

@section('content')
    <div class="wrapsemibox">
        <div class="content mt-5 p-3">
            @livewire('products.product-table')
        </div>
    </div>
@endsection
