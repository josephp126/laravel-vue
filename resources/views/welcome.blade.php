@extends('layouts.main')

@section('content')
    <!-- CAROUSEL
================================================== -->
    <section class="carousel carousel-fade slide home-slider" id="c-slide" data-ride="carousel" data-interval="4500"
             data-pause="false">
        <ol class="carousel-indicators">
            <li data-target="#c-slide" data-slide-to="0" class="active"></li>
            <li data-target="#c-slide" data-slide-to="1" class=""></li>
            <li data-target="#c-slide" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"
                 style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/slide3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br>
                            <br>
                            <div class="animated fadeInDownBig notransition">
                                <span class="car-largetext">Vivid Skins <span class="font300">&amp; Three</span> Layouts</span><br>
                            </div>
                            <br>
                            <br>
                            <div class="car-widecircle animated fadeInLeftBig notransition">
                                <span>Wide</span>
                            </div>
                            <div class="car-middlecircle animated fadeInUpBig notransition">
                                <span>Boxed</span>
                            </div>
                            <div class="car-smallcircle animated fadeInRightBig notransition">
                                <span>Narrow</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 fadein scaleInv anim_1">
                            <div class="fadein scaleInv anim_2">
                                <h1 class="carouselText1 animated fadeInUpBig">Welcome to <span class="colortext">Calypso</span>
                                </h1>
                            </div>
                            <div class="fadein scaleInv anim_1">
                                <p class="carouselText2 animated fadeInLeft">
                                    MultiPurpose Template
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_2">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Bootstrap 3.2.0 + Compatible
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_3">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Responsive Layouts
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_4">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Beautiful Animation Effects
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_5">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Top Notch Support
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center fadein scaleInv anim_2">
                            <div class="text-center">
                                <div class="fadein scaleInv anim_3">
                                    <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-3.png" alt=""
                                         class="slide1-3 animated rollIn">
                                </div>
                                <div class="fadein scaleInv anim_8">
                                    <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-1.png" alt=""
                                         class="slide1-1 animated rollIn">
                                </div>
                                <div class="fadein scaleInv anim_5">
                                    <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-2.png" alt=""
                                         class="slide1-2 animated rollIn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/slide1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 animated fadeInUp notransition">
                            <img src="http://www.wowthemes.net/demo/calypso/img/demo/desktop3.png" alt=""
                                 style="width:90%;">
                        </div>
                        <div class="col-md-6 animated fadeInDown  notransition mt-5 text-right">
                            <div class="car-highlight1 animated fadeInLeftBig">
                                Add ANYTHING in Slider
                            </div>
                            <br>
                            <div class="car-highlight2 animated fadeInRightBig notransition">
                                Powerful Options
                            </div>
                            <br>
                            <div class="car-highlight3 animated fadeInUpBig notransition">
                                Video, Audio, Text, Iframes etc
                            </div>
                            <br>
                            <div class="car-highlight4 animated flipInX notransition">
                                Any HTML5 code you wish
                            </div>
                            <br>
                            <div class="car-highlight5 animated rollIn notransition">
                                Slider with <span class="font100">Total Control</span><br>
                                <span class="font100" style="font-size:20px;">Embed Practically</span> Anything<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/slide3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br>
                            <br>
                            <div class="animated fadeInDownBig notransition">
                                <span class="car-largetext">Vivid Skins <span class="font300">&amp; Three</span> Layouts</span><br>
                            </div>
                            <br>
                            <br>
                            <div class="car-widecircle animated fadeInLeftBig notransition">
                                <span>Wide</span>
                            </div>
                            <div class="car-middlecircle animated fadeInUpBig notransition">
                                <span>Boxed</span>
                            </div>
                            <div class="car-smallcircle animated fadeInRightBig notransition">
                                <span>Narrow</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.carousel-inner -->
        <a class="left carousel-control animated fadeInLeft" href="#c-slide" data-slide="prev"><i
                class="icon-angle-left"></i></a>
        <a class="right carousel-control animated fadeInRight" href="#c-slide" data-slide="next"><i
                class="icon-angle-right"></i></a>
    </section>
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
                    <div class="text-center heading w-100 mb-3">
                        <img src="/images/icons/Case Studies.jpg" alt="cases" class="header-icon">
                        PROJECTS AND CASE STUDIES
                    </div>
                    <div class="col-lg-12">
                        <div class="list_carousel text-center">
                            <div class="carousel_nav"><a class="prev" id="car_prev" href="#"><span>prev</span></a>
                                <a class="next"
                                   id="car_next" href="#"><span>next</span></a>
                            </div>
                            <div class="clearfix"></div>
                            <ul id="carousel-projects">
                                <!--featured-projects 1-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Trains</a></h1>
                                        <p>Lore ipsum</p>
                                    </div>
                                </li>
                                <!--featured-projects 2-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Automobiles</a></h1>
                                        <p>Jura mountains</p>
                                    </div>
                                </li>
                                <!--featured-projects 3-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Biscaya</a></h1>
                                        <p>Clio sorevins</p>
                                    </div>
                                </li>
                                <!--featured-projects 4-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Serenity</a></h1>
                                        <p>Tabiscum rocens</p>
                                    </div>
                                </li>
                                <!--featured-projects 5-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">BizLeaders</a></h1>
                                        <p>Larius trano</p>
                                    </div>
                                </li>
                                <!--featured-projects 6-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Salma</a></h1>
                                        <p>Vobiscum atens</p>
                                    </div>
                                </li>
                                <!--featured-projects 7-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">RetroDoe</a></h1>
                                        <p>Oliya verder</p>
                                    </div>
                                </li>
                                <!--featured-projects 8-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption"><a href="projectdetail.html"><i
                                                        class="icon-link captionicons"></i></a>
                                                <a
                                                    data-gal="prettyPhoto[gallery1]"
                                                    href="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                                    title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Chaux Fonds</a></h1>
                                        <p>Diva menthol</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.recent-projects-home end-->
    </div>
    <!-- /.wrapsemibox end-->
@endsection

@section('scripts')
    <script>
        /* ---------------------------------------------------------------------- */
        /*	Carousel
        /* ---------------------------------------------------------------------- */
        $(function () {
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
                auto: false,
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
                    easing: '',
                    duration: 1200,
                },
            });
        });
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
            $('#cbp-qtrotator').cbpQTRotator();
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
            $container.imagesLoaded(function () {
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    },
                });
            });
            $('#filter a').click(function (event) {
                $('a.selected').removeClass('selected');
                var $this = $(this);
                $this.addClass('selected');
                var selector = $this.attr('data-filter');
                $container.isotope({
                    filter: selector,
                });
                return false;
            });
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
