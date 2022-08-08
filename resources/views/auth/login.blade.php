@extends('layouts.auth', ['type' => 'login'])

@section('content-auth')
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
                    <h3>Come aquí</h3>
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Contraseña"/>
                    <div class="content-login-checkbox">
                        <input class="custom-control-input" value="{{ old('email') }}" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheckLogin">
                            <span class="text-muted">Recuerdame</span>
                        </label>
                    </div>
                    <button type="submit" class="button-login">Inicia Sesión</button>
                </form>
@endsection
