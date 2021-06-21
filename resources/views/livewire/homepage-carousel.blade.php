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
                <div class="carousel-container">
                    @if($slide->fgSmImageUrl)
                        <img src="{!! $slide->fgSmImageUrl !!}" alt="Slide sm" class="h-100 w-100 d-md-none animated fadeInLeft" />
                    @endif

                    @if($slide->fgMdImageUrl)
                        <img src="{!! $slide->fgMdImageUrl !!}" alt="Slide md" class="h-100 w-100 d-none d-md-block d-lg-none animated fadeInLeft" />
                    @endif

                    @if($slide->fgLgImageUrl)
                        <img src="{!! $slide->fgLgImageUrl !!}" alt="Slide lg" class="h-100 w-100 d-none d-lg-block animated fadeInLeft" />
                    @endif

                </div>
            </div>
        @endforeach


        <livewire:carousel-control carousel-id="carousel" direction="left" />
            <livewire:carousel-control carousel-id="carousel" direction="right" />
    </div>
</div>
@endif
