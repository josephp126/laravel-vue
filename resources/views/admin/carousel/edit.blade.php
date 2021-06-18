@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        {!! Form::model($data, ['action' => ['admin.carousel.update', $data]]) !!}
        @include('admin.carouse.fields')
        @include('partials.form-buttons')
        {!! Form::close() !!}
    </div>
@endsection
