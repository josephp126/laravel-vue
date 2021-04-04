@extends('layouts.skel')

@section('skel_scripts')
    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/plugins.js') }}"></script>
    <script src="{{ url('/js/common.js') }}"></script>
@endsection

@section('skel_styles')
@endsection

@section('skel_content')
    <!-- /.wrapbox start-->
    <div class="wrapbox">
        @include('layouts.main-bar-top')
        @include('layouts.main-nav-top')
        <div class="clearfix"></div>
        @yield('content')

        @include('layouts.main-footer')
    </div>
    <!-- /.wrapbox ends-->

    @yield('scripts')
@endsection
