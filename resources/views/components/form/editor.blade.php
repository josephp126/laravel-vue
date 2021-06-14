<div class="form-group">
    @if(isset($attributes['label']))<label for="{{$name}}">{!! $attributes['label'] ?? '' !!}</label>@endif
    <text-editor id="{{$name}}" name="{{$name}}" value="{{$value}}"></text-editor>
</div>
