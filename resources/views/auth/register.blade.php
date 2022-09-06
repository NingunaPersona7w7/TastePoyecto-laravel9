
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,500;0,800;1,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/9f0e9662cd.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('assets/css/registro.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/login/normalize.css')}}" />
    <title></title>
</head>
<body>
    <main class="login-design">
        <div class="waves">
            <img class="registro" src="{{URL::asset('assets/css/imageneslogin/registro2.png')}}" alt="">
        </div>
        <div class="login">
            <div class="login-data">
            <img src="{{URL::asset('assets/css/imageneslogin/taste.png')}}" alt="">
            <h1>Registrate</h1>
            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <label class="input-fill">
                        <input type="text" name="name" value="{{ old('name') }}" id = "name" required autofocus>
                        <span class="input-label"> Nombre</span>
                        <i class="fa-solid fa-envelope"></i>
                    </label>
                </div>

                <div class="input-group">
                    <label class="input-fill">
                        <input type="email" name="email" value="{{ old('email') }}" id="email " required>
                        <span class="input-label">Correo Electronico</span>
                        <i class="fa-solid fa-envelope"></i>
                    </label>
                </div>

                <div class="input-group">
                    <label class="input-fill">
                        <input type="password" name="password"  id="password " required>
                        <span class="input-label"> Contraseña</span>
                        <i class="fa-solid fa-lock"></i>
                    </label>
                </div>
                <div class="input-group">
                    <label class="input-fill">
                        <input type="password" name="password_confirmation" id="passwordConfirmation " required>
                        <span class="input-label">Confirmar Contraseña</span>
                        <i class="fa-solid fa-lock"></i>
                    </label>
                </div>
                <input type="submit" value="Registrar" class="btn-login" />
            </form>
            </div>
        </div>
    </main>
</body>
</html>


            <!--<form role="form" method="POST" action="{{ route('register') }}">
                @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>El email ya esta registrado</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>La Contraseña no coincide</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirmar contraseña') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>

                            <label class="t18">
                                <span onclick="viewConditions()"><u>Ver terminos y condiciones</u></span>
                            </label>
                            <div class="content-login-checkbox">
                                <input class="custom-control-input" id="customCheckRegister" type="checkbox" >
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">Aceptar terminos y condiciones</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="button-login">{{ __('Crear Cuenta') }}</button>
                            </div>
                        </form>-->
