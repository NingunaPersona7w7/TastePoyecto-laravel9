<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>
 
<body>
    <div class="content-app">
        <header class="content-header">
            @auth()
                <div class="content-menu">
                    <button class="button-menu" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">☰</button>
                </div>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <center><b><div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">MENU</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div></b></center>
                    <div class="offcanvas-body">
                        <a class="text-deconration-none" href="{{ url('/home') }}">
                            <div class="option-profile1">Pagina Principal  </div>
                        </a>
                        @can('ver-user')
                        <a class="text-deconration-none" href="{{ url('/user') }}">
                            <div class="option-profile1">Crud</div>
                        </a>
                        @endcan
                        <a class="text-deconration-none" href="{{ url('/profile') }}">
                            <div class="option-profile1">Mi perfil</div>
                        </a>
                        @can('ver-rol')
                            <a class="text-deconration-none" href="{{ url('/roles') }}">
                                <div class="option-profile1">Roles</div>
                            </a>
                        @endcan
                        @can('crear-post')
                            <a class="text-deconration-none" href="{{ url('/posts') }}">
                                <div class="option-profile1">Crear Comida</div>
                            </a>
                        @endcan
                           
                    </div>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <div class="option-profile2">Cerrar sesión</div>
                            </a>
                </div>
            @endauth
            <div class="content-header-logo">
                <img src="{{ URL::asset('assets/img/icons/logo.png') }}" alt="" srcset="">
            </div>
            <div class="content-profile-app">
                @auth()
                    @include('layouts.profile')
                @endauth
            </div>
        </header>
 
        <main class="main-content">
            @yield('content')
 
 
        </main>
    </div>
    <div id="modal-app" class="modal-app">
        <div id="content-modal-app" class="content-modal-app">
 
        </div>
    </div>
    <script src="{{ URL::asset('assets/js/funtions.js') }}"></script>
<<<<<<< HEAD
=======
 
>>>>>>> db4c1c0e03e0433d824f4238eeaacb88d71d91e7
</body>
 
</html>
