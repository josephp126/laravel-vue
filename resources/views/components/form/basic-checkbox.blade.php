<div class="custom-control custom-checkbox my-3">
    <input type="checkbox" value="1" id="{{$name}}" name="{{$name}}" @if($value !== false) checked
           @endif class="custom-control-input">
    @if($label)<label for="{{$name}}" class="custom-control-label">{!! $label !!}</label>@endif
</div>
