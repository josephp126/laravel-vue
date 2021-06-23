<div class="row">
    <div class="col-md-4">
        {!! Form::basicInput('first_name', null, ['label' => 'First Name', 'required' => true]) !!}
    </div>
    <div class="col-md-4">
        {!! Form::basicInput('last_name', null, ['label' => 'Last Name', 'required' => true]) !!}
    </div>
    <div class="col-md-4">
        {!! Form::basicInput('username', null, ['label' => 'User Name', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('email', null, ['label' => 'Email', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('phone', null, ['label' => 'Phone', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('address', null, ['label' => 'Address', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('zip', null, ['label' => 'Zipcode', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::Label('state', 'State') !!}
        <select class="form-control" id="state" name="state">
            @foreach ($states as $record)
                <option value="{{ $record->id }}">{{ $record->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('city', null, ['label' => 'City', 'required' => true]) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('password', null, ['label' => 'Password', 'type' => 'password']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('password_confirmation', null, ['label' => 'Confirm Password', 'type' => 'password']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::Label('date_joined', 'Date Joined') !!}
        <input type="date" id="date_joined" class="form-control" name="date_joined" value="{{ date('Y-m-d') }}" />
    </div>
    <div class="col-md-6">
        {!! Form::Label('file', 'Logo') !!}
        <div id="userLogoPreview">
            <img class="img-thumbnail img-xs w-100 h-100" src="{{ $user->imageUrl }}" />
        </div>
        <div class="row m-0" style="padding-top: 10px">
            <div class="col-md-3 p-0 m-0">
                <span class="btn btn-primary">Choose Logo</span>
                <input type="file" id="file" name="file" class="file-input">
            </div>
            <div class="col-md-3 p-0 m-0" {{ $user->uuid ? '' : 'style=display:none' }}>
                <button class="btn btn-danger" type="submit" name="action" value="remove-logo">Remove Logo</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::basicCheckbox('is_active', true, ['label' => 'Is Active']) !!}
    </div>
</div>
