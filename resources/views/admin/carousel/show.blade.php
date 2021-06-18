@extends('admin.layouts.main-admin')

@section('content')
    <div class="container-fluid">
        @livewire('admin-carousel-editor', ['carousel_id' => $carousel->id])
    </div>
@endsection
