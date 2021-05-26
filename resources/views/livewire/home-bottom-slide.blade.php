@if(count($sliders) > 0)
<div class="text-center heading w-100 mb-3">
    <img src="/images/icons/Case Studies.jpg" alt="cases" class="header-icon">
    PROJECTS AND CASE STUDIES
</div>
<div class="col-lg-12">
    <div class="list_carousel text-center">
        <div class="row">
            <!--featured-projects 1-->
            @foreach ($sliders as $slider)
                <div class="boxcontainer col-md-3">
                    <img src="{{ $slider->path }}" alt="">
                    <div class="roll" style="top: 0">
                        <div class="wrapcaption">
                            {{-- <a href="projectdetail.html"><i class="icon-link captionicons"></i></a> --}}
                            <a
                                data-gal="prettyPhoto[gallery1]" href="{{ $slider->path }}" title="{{ $slider->filename }}"><i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                    {{-- <h1><a href="projectdetail.html">Automobiles</a></h1>
                    <p>Jura mountains</p> --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
