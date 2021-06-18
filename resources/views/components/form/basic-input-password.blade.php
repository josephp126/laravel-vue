<div class="form-group">
    @if($label) <label for="{{$type}}">{{$label}}</label> @endif
    {!! Form::password($name, ['class' => 'form-control', 'id' => $name, 'required' => $required]) !!}
</div>
