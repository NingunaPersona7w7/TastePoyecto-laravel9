<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
    <!-- CSRF Token -->
    <style>
    *{
        padding: auto;
        margin:auto;
    }
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TASTE') }}</title>

    <!-- Fonts -->
<<<<<<< HEAD
    <link rel="stylesheet" src="..\..\css\app.css" type="text/scss">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
=======

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
>>>>>>> 5d38480a2c9966cafbb22b6f40a20002b9b37929

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <div id="app">
        <header style="background-color:red">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p>TASTE</p>
                </a>
        </header>

    <div id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
        <!-- Right Side Of Navbar -->
    
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                        <a class s="nav-link" href="{{ route('login') }}">{{ __('Inicia Sesión') }}</a>
                @endif

                @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                @endif
            @else
            <div class="card text-center">
                <li>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
