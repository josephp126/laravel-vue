@extends('admin.layouts.main-admin')

@section('content')
    <div class="container mt-3">
        {!! Form::model($user, ['route' => ['admin.user.update', $user], 'method' => 'put', 'files' => true]) !!}

        @include('admin.users.fields')
        @include('partials.form-buttons')

        {!! Form::close() !!}
    </div>
@endsection
