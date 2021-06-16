<div id="carousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="1000000" data-auto="false">
    <livewire:carousel-indicators count="3" active="0" />

    <div class="carousel-inner">
        <div id="carousel-item-1" class="carousel-item active" style="background: url('{{url('images/homepage/carousel/slide-1-bg.svg')}}')">
            <div class="carousel-container">

                <div class="row h-100 align-content-center">
                    <div class="col-lg-1 left p-0"></div>
                    <div class="col-lg-5 left p-0">
                        <div class="top">
                            <div class="text animated fadeInLeft">
                                HIGH-PERFORMING LOUVERS
                            </div>
                        </div>

                        <div class="bottom">
                            <img class="animated fadeInLeft perfect-for-any-condition" src="{{url('images/homepage/Air-Control-Text2.svg')}}" alt="perfect-for-any-condition"/>
                        </div>
                    </div>
                    <div class="col-lg-5 right p-0">
                        <img class="animated fadeInRight" src="{{url('images/homepage/slide-1-right-img.png')}}" alt="Slide one right image"/>
                    </div>
                </div>

            </div>
        </div>


        <div id="carousel-item-2" class="carousel-item" style="background: url('images/homepage/carousel/slide-2-bg.svg')">
            <div class="carousel-container">
                <div class="row h-100 align-content-center">
                    <div class="animated fadeInRight w-100 h-100" style="background: url('images/homepage/carousel/slide-2-fg.svg');"></div>
                </div>
            </div>
        </div>


        <div id="carousel-item-3" class="carousel-item" style="background: url('images/homepage/carousel/slide-3-bg.svg')">
            <div class="carousel-container">
                <div class="row h-100 align-content-center">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9 h-100 animated fadeInLeft" style="background: url('images/homepage/carousel/slide-3-fg.svg');"></div>
                </div>
            </div>
        </div>
    </div>

    <livewire:carousel-control carousel-id="carousel" direction="left" />
    <livewire:carousel-control carousel-id="carousel" direction="right" />
</div>
