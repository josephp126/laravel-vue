@extends('admin.layouts.main-admin')

@section('content')
    <div class="container mt-3">
        {!! Form::open(['route' => 'admin.user.store', 'method' => 'post', 'files' => true]) !!}

        @include('admin.users.fields')
        @include('partials.form-buttons')

        {!! Form::close() !!}
    </div>
@endsection
