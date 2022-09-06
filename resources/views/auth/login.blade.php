

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
    <link rel="stylesheet" href="{{URL::asset('assets/css/login/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <main class="login-design">

        <div class="waves">
            <img class="imagen" src="{{URL::asset('assets/css/imageneslogin/iniciodesesion.png')}}" alt="">
        </div>

        <div class="login">
            <div class="login-data">
            <img src="{{URL::asset('assets/css/imageneslogin/taste.png')}}" >
            <h1>Inicio de Sesion</h1>
            <form role="form" method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <div class="input-group">
                    <label class="input-fill">
                        <input type="email" name="email" id="email " value="{{ old('email') }}" required autofocus>
                        <span class="input-label">Correo Electronico</span>
                        <i class="fa-solid fa-envelope"></i>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>El correo o la contraseña son incorrectas</strong>
                        </span>
                    @endif
                    </label>
                </div>
                <div class="input-group">
                    <label class="input-fill">
                        <input type="password" name="password" id="password " value="secret" required>
                        <span class="input-label"> Contraseña</span>
                        <i class="fa-solid fa-lock"></i>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>El correo o la contraseña son incorrectas</strong>
                        </span>
                    @endif
                    </label>
                </div>
                <a href="{{ url('/register') }}">¿Necesitas una Cuenta?</a>
                <input type="submit" value="Iniciar Sesion" class="btn-login" />
            </form>
            </div>
        </div>
    </main>
</body>
</html>
            <!--<form role="form" method="POST" action="{{ route('login') }}">
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
                            </div>

            </form> -->


