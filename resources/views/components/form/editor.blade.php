<div class="form-group">
    @if($label)<label for="{{$name}}">{!! $label ?? '' !!}</label>@endif
    <text-editor id="{{$name}}" name="{{$name}}" value="{{$value}}"></text-editor>
</div>
