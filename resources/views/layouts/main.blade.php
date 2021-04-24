@extends('layouts.skel')

{{--@section('skel_scripts')--}}
{{--@endsection--}}

{{--@section('skel_styles')--}}
{{--@endsection--}}

@section('skel_content')
    <!-- /.wrapbox start-->
    <div class="wrapbox">
        @include('layouts.main-bar-top')
        @include('layouts.main-nav-top')
        <div class="clearfix"></div>

        @hasSection('breadcrumbs')
            <section class="pageheader-default text-center mt-0">
                <div class="semitransparentbg">
                    @hasSection('pageTitle')
                        <h1 class="animated fadeInLeftBig notransition text-wrap">@yield('pageTitle')</h1>
                    @endif
                    <p class="animated fadeInRightBig notransition container wowbreadcr text-dark">
                        <a class="text-dark" href="{{route('home')}}">Home</a> / @yield('breadcrumbs')
                    </p>
                </div>
            </section>
        @endif

        @yield('content')

        @include('layouts.main-footer')
    </div>
    <!-- /.wrapbox ends-->

    @yield('scripts')
@endsection
