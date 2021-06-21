@extends('admin.layouts.main-admin')

@section('content')
    <div class="container mt-3">
        {!! Form::model($user, ['route' => ['admin.user.update', $user], 'method' => 'put', 'files' => true]) !!}

        @include('admin.users.fields')
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-danger" type="submit" name="action" value="remove-logo">Remove Logo</button>
            </div>
        </div>
        @include('partials.form-buttons')

        {!! Form::close() !!}
    </div>
@endsection
