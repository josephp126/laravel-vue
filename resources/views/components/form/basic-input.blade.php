<div class="form-group">
    @if($label) <label for="{{$name}}">{{$label}}</label> @endif
    {!! Form::$type($name, null, $attributes + ['class' => 'form-control', 'id' => $name, 'required' => $required, 'placeholder' => $placeholder]) !!}
</div>
