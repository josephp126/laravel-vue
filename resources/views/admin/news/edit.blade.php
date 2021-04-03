@extends('layouts.main-admin')

@section('content')
    <div class="container mt-30">
        {!! Form::model($news, ['route' => ['admin.news.update', $news], 'method' => 'put', 'files' => true]) !!}

        @include('admin.news.fields')
        @include('partials.form-buttons')

        {!! Form::close() !!}
    </div>
@endsection
