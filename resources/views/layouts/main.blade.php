@extends('layouts.skel')

@section('skel_scripts')
    <script src="{{ url('js/calypso/jquery.js') }}"></script>
    <script src="{{ url('js/calypso/bootstrap.js') }}"></script>
    <script src="{{ url('js/calypso/plugins.js') }}"></script>
    <script src="{{ url('js/calypso/common.js') }}"></script>
@endsection

@section('skel_styles')
    <link href="{{ url('css/calypso/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/calypso/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/calypso/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ url('css/calypso/css/layout-semiboxed.css') }}" rel="stylesheet">
    <link href="{{ url('css/calypso/css/skin-red.css') }}" rel="stylesheet">
@endsection

@section('skel_content')
    <!-- /.wrapbox start-->
    <div class="wrapbox">
        @include('layouts.main-bar-top')
        @include('layouts.main-nav-top')

        @yield('content')

        @include('layouts.main-footer')
    </div>
    <!-- /.wrapbox ends-->

    @yield('scripts')
@endsection
