@extends('layouts.app')

@section('content')
    <main class="content-login">
        <div class="content-login-info">
            <h2>Come mientras ayudas a los demás</h2>
            <p>Los colaboradores llegaran con tu comida y la haran en sus carritos frente a tu casa</p>
            @if ($type == 'register')
                <a href="{{ url('/login') }}"><h6>Inicia Sesión</h6></a>
            @else
                <a href="{{ url('/register') }}"><h6>Registrate</h6></a>
            @endif
        </div>
        <div class="content-login-login">
            <div class="box-login">
                @yield('content-auth')
            
            </div>
        </div>
    </main>    
@endsection
