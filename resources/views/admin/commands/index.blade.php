@extends('admin.layouts.main-admin')

@section('content')
    <div class="d-flex flex-wrap">
        <a href="{{route('admin.special.commands.migrations')}}" class="m-3 btn btn-primary">Run migrations</a>
    </div>
@endsection
