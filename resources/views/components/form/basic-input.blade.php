<div class="form-group">
    @if($label) <label for="{{$type}}">{{$label}}</label> @endif
    {!! Form::$type($name, null, $attributes + ['class' => 'form-control', 'id' => $name, 'required' => $required, 'placeholder' => $placeholder]) !!}
</div>
