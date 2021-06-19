@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        ++
        <carousel-slide-editor carousel_id="{{$carousel->id}}"></carousel-slide-editor>
        --
    </div>
@endsection
