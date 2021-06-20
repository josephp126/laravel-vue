@foreach($carousel->slides as $inc => $slide)
.carousel-homepage #carousel-item-{{$inc}} {
    background: url('{{$slide->backgroundImageDefaultUrl}}')
}

@if($slide->backgroundImageMdUrl)
@media (max-width: 991.98px) {
    .carousel-homepage #carousel-item-{{$inc}} {
        background: url('{{$slide->backgroundImageMdUrl}}')
    }
}
@endif

@if($slide->backgroundImageSmUrl)
@media (max-width: 767.98px) {
    .carousel-homepage #carousel-item-{{$inc}} {
        background: url('{{$slide->backgroundImageSmUrl}}')
    }
}
@endif
@endforeach
