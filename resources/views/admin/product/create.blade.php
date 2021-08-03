@extends('admin.layouts.main-admin')

{{--@section('pageTitle', _PAGE_TITLE_ )--}}

{{--@section('breadcrumbs')--}}
{{--    <a href="{{route('MODEL.index')}}" class="text-dark">_LINK_NAME_</a> / _PAGE_TITLE_ --}}
{{--@endsection--}}

@section('content')
    <div class="wrapsemibox">
        <div class="content p-3 mt-5">
            {!! Form::model(['active' => true], ['route' => 'admin.product.store', 'method' => 'post']) !!}

            @include('admin.product.form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
