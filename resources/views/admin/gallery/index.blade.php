@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        <gallery product_id="{{$product->id}}"></gallery>
    </div>
@endsection
