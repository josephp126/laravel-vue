<div class="form-group @error($name) is-invalid @enderror">
    @if($label)<label for="{{$name}}">{{$label}}</label>@endif
    <input
        type="text"
        class="form-control @error($name) is-invalid @enderror"
        name="{{$name}}"
        id="{{$name}}"
        aria-describedby="{{$nameHelp}}"
        placeholder="{{$placeholder}}"
        wire:model="value"
        :required="required"
    />
    @if($help)<small id="{{$nameHelp}}" class="form-text text-muted">{{$help}}</small>@endif

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
