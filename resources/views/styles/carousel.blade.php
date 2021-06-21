.carousel-homepage, .carousel-homepage, .carousel-inner {
height: {{(int)($carousel->height_lg ?? config('carousel.heights.lg')) - 27}}px;
}

@media (max-width: 991.98px) {
.carousel-homepage, .carousel-homepage, .carousel-inner {
height: {{(int)($carousel->height_md ?? config('carousel.heights.md')) - 27}}px;
}
}
@media (max-width: 767.98px) {
.carousel-homepage, .carousel-homepage, .carousel-inner {
height: {{(int)($carousel->height_sm ?? config('carousel.heights.sm')) - 27}}px;
}
}

@foreach($carousel->slides as $inc => $slide)
    .carousel-homepage #carousel-item-{{$slide->id}} {
    height: 100%;
    background: url('{{$slide->backgroundImageDefaultUrl}}')
    }

    @if($slide->backgroundImageMdUrl)
        @media (max-width: 991.98px) {
        .carousel-homepage #carousel-item-{{$slide->id}} {
        background: url('{{$slide->backgroundImageMdUrl}}')
        }
}
@endif

    @if($slide->backgroundImageSmUrl)
@media (max-width: 767.98px) {
.carousel-homepage #carousel-item-{{$slide->id}} {
background: url('{{$slide->backgroundImageSmUrl}}')
}
}
@endif
@endforeach
