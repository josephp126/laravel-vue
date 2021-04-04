@extends('layouts.main')

@section('content')
    <div class="container mt-30">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <h3 class="card-header mb-20">{{ __('Login') }}</h3>

                    <div class="card-body">
                        {!! Form::open(['route' => 'login', 'method' => 'post']) !!}

                        <div class="form-group">
                            <label for="email">Email</label>
                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'required' => true]) !!}
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required' => true]) !!}
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
