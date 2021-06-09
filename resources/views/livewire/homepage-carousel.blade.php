<div id="carousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="1000000" data-auto="false">
    <livewire:carousel-indicators count="3" active="0" />

    <div class="carousel-inner">
        <div id="carousel-item-1" class="carousel-item active" style="background: url('{{url('images/homepage/carousel/bg-slide-1.svg')}}')">
            <div class="carousel-container">

                <div class="row h-100">
                    <div class="col-lg left">
                        <div class="top">
                            <img class="animated fadeInLeft high-preforming-louvers" src="{{url('images/homepage/carousel/high-preforming-louvers.png')}}" alt="high-preforming-louvers"/>
                        </div>

                        <div class="bottom">
                            <img class="animated fadeInLeft perfect-for-any-condition" src="{{url('images/homepage/carousel/perfect-for-any-condition.png')}}" alt="perfect-for-any-condition"/>
                        </div>
                    </div>
                    <div class="col-lg right">
                        <img class="animated fadeInRight" src="{{url('images/homepage/carousel/slide-1-right-img.png')}}" alt="Slide one right image"/>
                    </div>
                </div>

            </div>
        </div>


        <div class="carousel-item" style="background: url('images/homepage/carousel/slider-2.jpg')">
            <div class="carousel-container">
            </div>
        </div>


        <div class="carousel-item" style="background: url('images/homepage/carousel/slider-3.jpg')">
            <div class="carousel-container">
            </div>
        </div>
    </div>

    <livewire:carousel-control carousel-id="carousel" direction="left" />
    <livewire:carousel-control carousel-id="carousel" direction="right" />
</div>
