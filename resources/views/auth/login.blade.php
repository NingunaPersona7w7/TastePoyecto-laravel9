@extends('layouts.auth', ['type' => 'login'])

@section('content-auth')
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                                </div>
                                
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Contraseña') }}" type="password" value="secret" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>El correo o la contraseña son incorrectas</strong>
                                    </span>
                                @endif
                            </div>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>El correo o la contraseña son incorrectas</strong>
                                    </span>
                                @endif
                            <div class="text-center">
                                <button type="submit" class="button-login">{{ __('Inicio de sesion') }}</button>
                            </div>


                            <div class="text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿olvidasde tu contraseña?') }}
                                </a>

@endsection
