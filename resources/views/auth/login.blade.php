@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <h3 class="card-header mb-20">{{ __('Login') }}</h3>

                    <div class="card-body bg-dark">
                        {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::basicInput('email', null, ['label' => 'Email', 'required' => true, 'type' => 'email']) !!}
                            </div>
                            <div class="col-md-12">
                                {!! Form::basicInput('password', null, ['label' => 'Password', 'required' => true, 'type' => 'password']) !!}
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        {!! Form::checkbox('remember', 1, null, ['class' => 'form-check-input', 'id' => 'remember']) !!}

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
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
