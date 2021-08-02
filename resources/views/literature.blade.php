@extends('layouts.main')

@section('skel_styles')
    {{--    <link rel="stylesheet" href="/carousel/homepage/style.css?{{Str::random(4)}}" />--}}
    <link rel="stylesheet" href="/carousel/homepage/style.css?{{Str::random(4)}}"/>
@endsection

@section('content')
    <img src="images/Literature-Page-Top-Graphic.jpg" style="width: 100%">

    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox shadow">
        <div class="semiboxshadow" style="padding-bottom: 10px">
            <img src="{{url('images/shp.png')}}" class="img-fluid" alt="">
        </div>
        <!-- INTRO NOTE==================================================-->

        <section class="intro-note topspace10">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12"
                         style="padding-bottom: 20px;color: #5E5D62;font-weight: bold;font-size: 23px">
                        Literature
                    </div>
                    <div class="col-12">
                        <button class="btn" style="background-color: blue;color:#fff;" onclick="filter('all')">All</button>
                        <button class="btn" style="background-color: #ccc;color:#000;" onclick="filter('louver')">Louver</button>
                        <button class="btn" style="background-color: #ccc;color:#000;" onclick="filter('life-safety')">Life Safety</button>
                        <button class="btn" style="background-color: #ccc;color:#000;" onclick="filter('air-control')">Air Control</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mt-2 all louver">
                        <div class="product-box">
                            <img src="images/literature/3-Sides-Retaining-Angle.jpg" style="width: 100%;">
                        </div>
                        <div class="literature-footer">
                            Labor saving UL approved 3-sided
                            Retaining angle installation
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
                console.log({e});
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
        var currentClass = '';
        function filter(current) {
            var classes = ["louver","life-safety","air-control","all"];
            var divsToHide;
            for(var j = 0;j < classes.length; j++) {
                if(current != classes[j]) {
                    divsToHide = document.getElementsByClassName(classes[j]); //divsToHide is an array
                    for (var i = 0; i < divsToHide.length; i++) {
                        divsToHide[i].style.display = "none"; // depending on what you're doing
                    }
                }
            }
            divsToHide = document.getElementsByClassName(current);
            for (var i = 0; i < divsToHide.length; i++) {
                divsToHide[i].style.display = "block";
            }

        }
    </script>
@endsection
