@if(count($sliders) > 0)
    <div class="text-center custom-section-title mb-3 w-100">
        <img src="/images/icons/Case Studies.png" alt="cases" class="header-icon">
        PROJECTS AND CASE STUDIES
    </div>
    <div class="col-lg-12">
        <div class="list_carousel text-center">
            <div class="d-flex flex-row row justify-content-between flex-wrap">
                <!--featured-projects 1-->
                @foreach ($sliders as $slider)
                    <div class="col-3">
                        <div class="boxcontainer">
                            <img src="{{ $slider->image->url }}" alt="" >
                            <div class="roll" style="top: 0">
                                <div class="wrapcaption">
                                    {{-- <a href="projectdetail.html"><i class="icon-link captionicons"></i></a> --}}
                                    <a
                                        data-gal="prettyPhoto[gallery1]" href="{{ $slider->image->url }}"
                                        title="{{ $slider->filename }}"><i class="icon-zoom-in captionicons"></i>
                                    </a>
                                </div>
                            </div>
                            <h1><a href="projectdetail.html" class="text-primary">{{$slider->title}}</a></h1>
                            <p>{{$slider->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
