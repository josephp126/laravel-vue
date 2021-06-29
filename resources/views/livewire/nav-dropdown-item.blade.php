<li>
    <a class="dropdown-item @if($image) d-flex flex-row @endif" href="{{$href}}">
        @if($image)
            <img src="{{url($image)}}" alt="Menu" class="pr-2 img-circle" width="60" />
        @endif
        {{$label}}
    </a>
</li>
