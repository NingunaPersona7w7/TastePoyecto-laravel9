@extends('layouts.auth', ['type' => 'register'])

@section('content-auth')
            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                    <h3>Come aquí</h3>
                    <input type="name" name="name" placeholder="Nombre completo"/>
                    <input type="email" name="email" placeholder="Email"/>
                    <select name="role">
                        <option value="buyer">
                            Comprador
                        </option>
                        <option value="seller">
                            Vendedor
                        </option>
                    </select>
                    <input type="password" name="password" placeholder="Contraseña"/>
                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña"/> 
                    <label class="t18">
                        <span onclick="viewConditions()"><u>Ver terminos y condiciones</u></span>
                    </label>
                    <div class="content-login-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" >
                        <label class="custom-control-label" for="customCheckLogin">
                            <span class="text-muted">Aceptar terminos y condiciones</span>
                        </label>
                    </div>                
                    <button type="submit" class="button-login">Registrate</button>
                </form>
@endsection
