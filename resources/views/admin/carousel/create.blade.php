@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        {!! Form::open(['route' => 'admin.carousel.store']) !!}
        @include('admin.carousel.fields')
        @include('partials.form-buttons')
        {!! Form::close() !!}
    </div>
@endsection
