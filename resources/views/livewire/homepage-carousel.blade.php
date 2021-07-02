@if($slide_count>0)
<div id="carousel" class="carousel-homepage carousel carousel-fade slide" data-ride="carousel" data-interval="1000000"
     data-auto="false">
    <livewire:carousel-indicators :count="$slide_count" active="1" />

    <div class="carousel-inner">
        @foreach($slides as $inc => $slide)
            <div
                id="carousel-item-{{$slide->id}}"
                class="carousel-item {{ $slide->id == $slides[0]->id? 'active': ''}}"
            >
                <div class="carousel-container d-flex">
                    @if($slide->fgSmImageUrl)
                        <img src="{!! $slide->fgSmImageUrl !!}" alt="Slide sm" class="d-md-none animated fadeInLeft" style="height: 100%; margin: 0 auto" />
                    @endif

                    @if($slide->fgMdImageUrl)
                        <img src="{!! $slide->fgMdImageUrl !!}" alt="Slide md" class="d-none d-md-block d-lg-none animated fadeInLeft" style="height: 100%; margin: 0 auto" />
                    @endif

                    @if($slide->fgLgImageUrl)
                        <img src="{!! $slide->fgLgImageUrl !!}" alt="Slide lg" class="d-none d-lg-block animated fadeInLeft" style="height: 90%; margin: 0 auto" />
                    @endif

                </div>
            </div>
        @endforeach


        <livewire:carousel-control carousel-id="carousel" direction="left" />
            <livewire:carousel-control carousel-id="carousel" direction="right" />
    </div>
</div>
@endif
