@extends('layouts.main')

@section('content')
    <!-- CAROUSEL
================================================== -->
<div id="carousel" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:530px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/homepage/carousel/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:530px;overflow:hidden;">
        <div data-fillmode="0" data-p="1065">
            <img data-u="image" src="images/homepage/carousel/slider-1-back.png" />
            <img data-to="50% 50%" data-t="0" style="left:1696px;top:0px;width:706px;height:479px;position:absolute;max-width:706px;" src="images/homepage/carousel/slider-1-res-1.png" />
            <div data-to="50% 50%" data-t="1" style="left:-600px;top:104px;width:539px;height:57px;position:absolute;color:#000d;font-family:Arial,Helvetica,sans-serif;font-size:30px;font-weight:900;text-align:left;padding:6px 10px 6px 10px;text-shadow:0px 1px #fff;box-sizing:border-box;background-color:#fffc;background-clip:padding-box;">HIGH-PERFORMING LOUVERS</div>
            <div data-to="50% 50%" data-t="2" style="left:-542px;top:384px;width:423px;height:86px;position:absolute;color:#fff;font-size:36px;font-weight:900;line-height:1.2;letter-spacing:0.05em;text-align:left;">PERFECT FOR <span style="color:#1d568d">ANY</span><br />&nbsp; &nbsp;CONDITION </div>
        </div>
        <div data-p="1065">
            <img data-u="image" src="images/homepage/carousel/slider-2-back.png" />
            <img data-to="50% 50%" data-t="3" style="left:-300px;top:14px;width:267px;height:448px;position:absolute;max-width:267px;" src="images/homepage/carousel/slider-2-res-1.png" />
            <img data-to="50% 50%" data-t="4" style="left:1700px;top:34px;width:300px;height:350px;position:absolute;max-width:300px;" src="images/homepage/carousel/slider-2-res-4.png" />
            <img data-to="50% 50%" data-t="5" style="left:250px;top:600px;width:345px;height:251px;position:absolute;max-width:345px;" src="images/homepage/carousel/slider-2-res-3.png" />
            <img data-to="50% 50%" data-t="6"
                 style="left:569px;top:600px;width:297px;height:257px;position:absolute;max-width:297px;"
                 src="images/homepage/carousel/slider-2-res-2.png" />
            <div data-to="50% 50%" data-t="7"
                 style="left:125px;top:-100px;width:686px;height:57px;position:absolute;color:#000d;font-family:Arial,Helvetica,sans-serif;font-size:30px;font-weight:900;text-align:left;padding:6px 10px 6px 10px;text-shadow:0px 1px #ffffff;box-sizing:border-box;background-color:#fffc;background-clip:padding-box;">
                UL CLASSIFIED LIFE SAFETY DAMPERS
            </div>
            <div data-to="50% 50%" data-t="8"
                 style="left:325px;top:-100px;width:460px;height:40px;position:absolute;color:#b74a1c;font-size:36px;font-weight:700;line-height:1.2;text-align:center;">
                TESTED AND TRUSTED<br /><br /></div>
        </div>
        <div data-p="1065">
            <img data-u="image" src="images/homepage/carousel/slider-3-back.png" />
            <img data-to="50% 50%" data-t="9"
                 style="left:1181px;top:-500px;width:266px;height:375px;position:absolute;max-width:266px;"
                 src="images/homepage/carousel/slider-3-res-3.png" />
            <img data-to="50% 50%" data-t="10"
                 style="left:416px;top:-500px;width:255px;height:450px;position:absolute;max-width:255px;"
                 src="images/homepage/carousel/slider-3-res-4.png" />
            <img data-to="50% 50%" data-t="11"
                 style="left:586px;top:-500px;width:291px;height:246px;position:absolute;max-width:291px;"
                 src="images/homepage/carousel/slider-3-res-2.png" />
            <img data-to="50% 50%" data-t="12"
                 style="left:820px;top:-500px;width:389px;height:193px;position:absolute;max-width:389px;"
                 src="images/homepage/carousel/slider-3-res-1.png" />
            <div data-to="50% 50%" data-t="13"
                 style="left:-650px;top:56px;width:616px;height:57px;position:absolute;color:#000d;font-family:Arial,Helvetica,sans-serif;font-size:30px;font-weight:900;text-align:left;padding:6px 10px 6px 10px;text-shadow:0px 1px #fff;box-sizing:border-box;background-color:#fffc;background-clip:padding-box;">
                COMMERCIAL CONTROL DAMPERS<br /><br /></div>
            <div data-to="50% 50%" data-t="14"
                 style="left:500px;top:-200px;width:553px;height:92px;position:absolute;color:#fff;font-size:40px;font-weight:700;line-height:1.2;text-align:center;">
                DESIGNED FOR<br />
                <span style="margin-left:300px;color:#e16048">SAFETY</span></div>
        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1"
         data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
    <!-- /.carousel end-->


    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox">
        <div class="semiboxshadow text-center">
            {{--            <img src="img/shp.png" class="img-fluid" alt="">--}}
        </div>
        <!-- INTRO NOTE==================================================-->

        <section class="intro-note topspace10">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">

                        <h1>THE <span class="colortext">PREFERRED SOLUTION</span> FOR LIFE SAFETY AND AIR CONTROL</h1>

                        <p>

                            Pottorff is one of the leading manufacturers of louvers and dampers in the industry. We are
                            committed

                            to superior customer service - delivering high-performing HVAC products on time and at
                            competitive process.

                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- /.intro-note end-->
        <!-- SERVICE BOXES==================================================-->

        <section class="service-box mt-5">

            <div class="container">

                <div class="row">

                    <livewire:home-product-card title="Air Control Dampers"
                                                description="Commercial, Industrial, Manual Balancing, Specialty, Backdraft Dampers"
                                                image="images/Product Photos/Backdraft Damper.png" />

                    <livewire:home-product-card title="Ceiling Radiation Dampers"
                                                description="Butterfly, Curtain Style, Wood Truss and Steel Truss"
                                                image="images/Product Photos/Ceiling Radiation Damper.png" />

                    <livewire:home-product-card title="UL Rated Fire/Smoke Dampers"
                                                description="Fire/Smoke Dampers, Dynamic and Static Fire Dampers, Corridor and Smoke Dampers"
                                                image="images/Product Photos/FSD.png" />

                    <livewire:home-product-card title="Louvers and Penthouses"
                                                description="Drainable, Operable, Miami-Dade,Florida Building Code, Penthouses, Specialty"
                                                image="images/Product Photos/Louver.png" />
                </div>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="d-flex list-unstyled bragging-logos">
                            <li>
                                <img src="/images/icons/Revit Logo.png" alt="News" />
                            </li>
                            <li>
                                <img src="/images/icons/News.jpg" alt="News" />
                            </li>
                            <li>
                                <img src="/images/icons/Case Studies.jpg" alt="Case" />
                            </li>
                            <li>
                                <img src="/images/icons/CSI.png" alt="CSI" />
                            </li>
                            <li>
                                <img src="/images/icons/Installation.png" alt="Installation" />
                            </li>
                            <li>
                                <img src="/images/icons/Educate.png" alt="Educate" />
                            </li>
                            <li>
                                <img src="/images/icons/warranty.png" alt="Waranty" />
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="d-flex list-unstyled bragging-logos">
                            <li>
                                <img src="/images/icons/Green Building Council.png" alt="Green Building Council" />
                            </li>
                            <li>
                                <img src="/images/icons/UL Logo Revised.png" alt="UL Logo Revised" />
                            </li>
                            <li>
                                <img src="/images/icons/Buy-American-Act.png" alt="Buy-American-Act" />
                            </li>
                            <li>
                                <img src="/images/icons/AMCA Logo.png" alt="AMCA Logo" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <!-- /.service-box end-->
        <!-- RECENT WORK==================================================-->

        <section class="home-portfolio bgarea mt-5 pt-3">

            <div class="">

                <div class="container">

                    <img class="float-left" src="{{url('/images/Louver Selection Tool Area/Monitor.png')}}" alt="Computer" height="447" />

                    <div class="list-louver-pull-left">
                        <h1 class="small animated fadeInLeftNow notransition">
                            LIST LOUVER INFORMATION AND SELECTION
                        </h1>

                        <p class="animated fadeInRightNow notransition  topspace20">

                            Pottorff's LIST Louver Information and Selection program was developed
                            with engineers and architects in mind. With its intuitive design, this industry
                            leading online tool takes all the guesswork out of picking the right louver
                            for any project.

                        </p>
                    </div>

                    <br>

                    <div class="select-louvers-based select-based-on-push-right float-left">
                        <h4 class="mb-3">SELECT LOUVERS BASED ON:</h4>

                        <ul class="list-unstyled list">
                            <li>Material</li>
                            <li>Louver Type</li>
                            <li>Blade Type</li>
                            <li>Airflow Velocities</li>
                            <li>Airflow Direction</li>
                            <li>Opening Size</li>
                            <li>Pressure Loss</li>
                            <li>Free Area</li>
                            <li>Beginning Point of Water Penetration</li>
                            <li>AMCA, FBC, Miami-Dade and FEMA Certifications</li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="bottom bg-primary w-100 mt-3 py-3 text-center">
                NO NEED TO REGISTER TO SELECT LOUVERS AND CREATE YOUR PRODUCT SCHEDULE. IMPORT DIRECTLY INTO SPECS PRICING PROGRAM.
            </div>
        </section>
        <!-- /.recent-work end-->
        <!-- FEATURES==================================================-->

        <section class="home-features mt-5 what-our-reps-say">
            <div class="container animated fadeInUpNow notransition">
                <h1 class="small text-center">WHAT OUR REPS SAY</h1>

                <div class="br-hr type_short">
                    <span class="br-hr-h">
                        <i class="icon-pencil"></i>
                    </span>
                </div>

                <ul class="quotes">
                    <li>
                        "Pottorff does what they say they will do. Honest, competitive and supportive" -
                        <div class="name">Jeremy Hobbs, J.M. O'Conner, Inc.</div>
                    </li>
                    <li>
                        "Quality manufacturing locations, knowledgeable staff and customer service" -
                        <div class="name">Todd Williams, Florida Air Solutions</div>
                    </li>
                    <li>
                        "Great customer service, factory support, product development, pricing software" -
                        <div class="name">Joe Paul, Deckman Company</div>
                    </li>
                </ul>
            </div>

        </section>

        <section id="news-section" class="news-section mt-3 animated fadeInUpNow notransition article-divider mx-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <livewire:home-news-list />
                    </div>
                    <div class="col-md-6">
                        <livewire:literature />
                    </div>
                </div>
            </div>
        </section>

        <!-- /.home-features end-->
        <section class="grayarea recent-projects-home mt-5 animated fadeInUpNow notransition">
            <div class="container">
                <div class="row">
                    <livewire:home-bottom-slide />
                </div>
            </div>
        </section>
        <!-- /.recent-projects-home end-->
    </div>
    <!-- /.wrapsemibox end-->
@endsection


@section('scripts')
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script>
        /* ---------------------------------------------------------------------- */
        /*	Carousel
        /* ---------------------------------------------------------------------- */
        $(function () {
            var carousel_SlideoTransitions = [
              [{b:0,d:800,x:791,e:{x:1}}],
              [{b:600,d:600,x:112}],
              [{b:680,d:720,x:120,y:260}],
              [{b:0,d:600,x:88}],
              [{b:200,d:600,x:806}],
              [{b:400,d:600,y:256}],
              [{b:600,d:600,x:570,y:258}],
              [{b:800,d:600,y:95}],
              [{b:800,d:600,y:175}],
              [{b:500,d:600,x:1180,y:90}],
              [{b:200,d:600,y:52}],
              [{b:400,d:600,y:257}],
              [{b:280,d:620,y:286}],
              [{b:700,d:600,x:673}],
              [{b:800,d:600,x:630,y:152}]
            ];

            var carousel_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$Swing,
              $PauseOnHover: 0,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: carousel_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var carousel_slider = new $JssorSlider$("carousel", carousel_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = carousel_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    carousel_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
        });
        /* ----------------------------------------------------------------------*/
    </script>
    <script>
        /* ---------------------------------------------------------------------- */
        /*  http://caroufredsel.falsecode.ru/
        /*	Bottom carousel
        /* ---------------------------------------------------------------------- */
        $(document).ready(function() {
            $('#carousel-projects').carouFredSel({
                responsive: true,
                items: {
                    width: 200,
                    height: 295,
                    visible: {
                        min: 1,
                        max: 4,
                    },
                },
                width: '200px',
                height: '295px',
                auto: true,
                circular: true,
                infinite: false,
                prev: {
                    button: '#car_prev',
                    key: 'left',
                },
                next: {
                    button: '#car_next',
                    key: 'right',
                },
                swipe: {
                    onMouse: true,
                    onTouch: true,
                },
                scroll: {
                    items:1,
                    easing: 'swing',
                    duration: 1200,
                },
            });
        });
        /* ----------------------------------------------------------------------*/
    </script>
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
