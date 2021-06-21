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
        <input type="date" id="date_joined" class="form-control" name="date_joined" value="{{ date('Y-m-d') }}" />
    </div>
    <div class="col-md-6">
        {!! Form::basicInput('file', null, ['label' => 'Logo', 'type' => 'file']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::basicCheckbox('is_active', true, ['label' => 'Is Active']) !!}
    </div>
</div>
