<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TASTE') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
>>>>>>> cd1b3b09bcc3f66fc16614db6a6e07fc1af41637
</head>
<body>
    <div class="content-app">
        <header class="content-header">
            <div></div>
            <div class="content-header-logo">
                <img src="{{URL::asset('assets/img/icons/logo.png')}}" alt="" srcset="">
            </div>
           <div class="content-profile-app">
             @auth()
                @include('layouts.profile')
             @endauth
           </div>
        </header>

        <main class="main-content">
            @yield('content')
<<<<<<< HEAD
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>
=======

        </main>
    </div>
    <div id="modal-app" class="modal-app">
        <div id="content-modal-app" class="content-modal-app">

        </div>
    </div>
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>

</body>
</html>

>>>>>>> cd1b3b09bcc3f66fc16614db6a6e07fc1af41637
