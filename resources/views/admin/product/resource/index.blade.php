@extends('admin.layouts.main-admin')

@section('content')
    <div class="wrapsemibox">
        <div class="content p-3 mt-5">
            <page-product-resource product_id="{{$product->id}}" />
        </div>
    </div>
@endsection
