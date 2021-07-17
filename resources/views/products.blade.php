@extends('layouts.main')

@section('skel_styles')
    {{--    <link rel="stylesheet" href="/carousel/homepage/style.css?{{Str::random(4)}}" />--}}
    <link rel="stylesheet" href="/carousel/homepage/style.css?{{Str::random(4)}}" />
@endsection

@section('content')
    <livewire:product-banner />

    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox shadow">
        <div class="semiboxshadow" style="padding-bottom: 10px">
            <img src="{{url('images/shp.png')}}" class="img-fluid" alt="">
        </div>
        <!-- INTRO NOTE==================================================-->

        <section class="intro-note topspace10">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12" style="padding-bottom: 20px;color: #5E5D62;font-weight: bold;font-size: 20px">
                        Pottorff >
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="filter-category-top">
                            Air Control Dampers
                        </div>
                        <div class="filter-category">
                            Commercial
                        </div>
                        <div class="filter-category">
                            Industrial
                        </div>
                        <div class="filter-category">
                            Manual Balancing
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="product-title">Air Control and Backdraft Dampers</h2>
                                <h3 class="product-title">Commercial</h3>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                <div class="product-top-title">
                                    3V Blade
                                </div>
                                <div  class="product-box">
                                    <img src="images/Product%20Photos/product-test.png" style="width: 100%;">
                                    <div style="padding: 5px 10px">
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-42</span> <i>Opposed Blade</i>
                                        </div>
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-41</span> <i>Parallel Blade</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                <div class="product-top-title">
                                    3V Blade
                                </div>
                                <div  class="product-box">
                                    <img src="images/Product%20Photos/product-test.png" style="width: 100%;">
                                    <div style="padding: 5px 10px">
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-42</span> <i>Opposed Blade</i>
                                        </div>
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-41</span> <i>Parallel Blade</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                <div class="product-top-title">
                                    3V Blade
                                </div>
                                <div  class="product-box">
                                    <img src="images/Product%20Photos/product-test.png" style="width: 100%;">
                                    <div style="padding: 5px 10px">
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-42</span> <i>Opposed Blade</i>
                                        </div>
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-41</span> <i>Parallel Blade</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                <div class="product-top-title">
                                    3V Blade
                                </div>
                                <div  class="product-box">
                                    <img src="images/Product%20Photos/product-test.png" style="width: 100%;">
                                    <div style="padding: 5px 10px">
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-42</span> <i>Opposed Blade</i>
                                        </div>
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-41</span> <i>Parallel Blade</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                <div class="product-top-title">
                                    3V Blade
                                </div>
                                <div  class="product-box">
                                    <img src="images/Product%20Photos/product-test.png" style="width: 100%;">
                                    <div style="padding: 5px 10px">
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-42</span> <i>Opposed Blade</i>
                                        </div>
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-41</span> <i>Parallel Blade</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-2">
                                <div class="product-top-title">
                                    3V Blade
                                </div>
                                <div  class="product-box">
                                    <img src="images/Product%20Photos/product-test.png" style="width: 100%;">
                                    <div style="padding: 5px 10px">
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-42</span> <i>Opposed Blade</i>
                                        </div>
                                        <div class="feature-item">
                                            <span style="color:#2D9BB7">AC-41</span> <i>Parallel Blade</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.intro-note end-->
        <!-- SERVICE BOXES==================================================-->
    </div>
    <!-- /.wrapsemibox end-->
@endsection


@section('scripts')
    <script>
        //CALL TESTIMONIAL ROTATOR
        $(function () {
            /*
            - how to call the plugin:
            $( selector ).cbpQTRotator( [options] );
            - options:
            {
                // default transition speed (ms)
                speed : 700,
                // default transition easing
                easing : 'ease',
                // rotator interval (ms)
                interval : 8000
            }
            - destroy:
            $( selector ).cbpQTRotator( 'destroy' );
            */
            try {
                $('#cbp-qtrotator').cbpQTRotator();
            } catch (e) {
                console.log({ e });
            }
        });
    </script>
    <script>
        //CALL PRETTY PHOTO
        // $(document).ready(function () {
        //     $('a[data-gal^=\'prettyPhoto\']').
        //         prettyPhoto({ social_tools: '', animation_speed: 'normal', theme: 'dark_rounded' });
        // });
    </script>
    <script>
        //MASONRY
        $(document).ready(function () {
            var $container = $('#content');
            // $container.imagesLoaded(function () {
            //     $container.isotope({
            //         filter: '*',
            //         animationOptions: {
            //             duration: 750,
            //             easing: 'linear',
            //             queue: false,
            //         },
            //     });
            // });
            // $('#filter a').click(function (event) {
            //     $('a.selected').removeClass('selected');
            //     var $this = $(this);
            //     $this.addClass('selected');
            //     var selector = $this.attr('data-filter');
            //     $container.isotope({
            //         filter: selector,
            //     });
            //     return false;
            // });
        });
    </script>
    <script>
        //ROLL ON HOVER
        $(function () {
            $('.roll').css('opacity', '0');
            $('.roll').hover(function () {
                    $(this).stop().animate({
                        opacity: .8,
                    }, 'slow');
                },
                function () {
                    $(this).stop().animate({
                        opacity: 0,
                    }, 'slow');
                });
        });
    </script>
@endsection
