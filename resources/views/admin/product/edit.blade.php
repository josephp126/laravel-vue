@extends('admin.layouts.main-admin')

{{--@section('pageTitle', _PAGE_TITLE_ )--}}

{{--@section('breadcrumbs')--}}
{{--    <a href="{{route('MODEL.index')}}" class="text-dark">_LINK_NAME_</a> / _PAGE_TITLE_ --}}
{{--@endsection--}}

@section('content')
    <div class="wrapsemibox">
        <div class="content p-3 mt-5">
            <h3 class="text-primary">Update</h3>
            <div class="row justify-content-end">
                <button class="btn btn-sm btn-primary">Product Resources</button>
                <button class="btn btn-sm btn-secondary ml-3">Product Images</button>
            </div>
            <br />
            {!! Form::model($product, ['route' => ['admin.product.update', $product], 'method' => 'put']) !!}

            @include('admin.product.form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
