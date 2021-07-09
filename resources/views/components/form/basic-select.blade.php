<div class="form-group">
    @if($label) <label for="{{$name}}">{{$label}}</label> @endif
    {!! Form::select($name, $options, null, $attributes + ['class' => 'form-control form-select', 'id' => $name]) !!}
</div>
