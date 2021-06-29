@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        {!! Form::model($carousel, ['route' => ['admin.carousel.update', $carousel], 'method' => 'put']) !!}
        @include('admin.carousel.fields')
        @include('partials.form-buttons')
        {!! Form::close() !!}
    </div>
@endsection
