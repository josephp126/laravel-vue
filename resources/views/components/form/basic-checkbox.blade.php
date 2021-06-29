<div class="form-group">
    <input type="checkbox" value="Active" id="{{$name}}" name="{{$name}}" @if($value === true) checked @else '' @endif>
    @if($label)<label for="{{$name}}">{!! $label !!}</label>@endif
</div>
