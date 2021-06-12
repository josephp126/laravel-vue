<div class="form-group">
    @if($label) <label for="{{$type}}">{{$label}}</label> @endif
    {!! Form::$type($name, null, ['class' => 'form-control', 'id' => $name, 'required' => $required]) !!}
</div>
