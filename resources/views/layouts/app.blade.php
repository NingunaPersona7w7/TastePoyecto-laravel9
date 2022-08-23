<!DOCTYPE html>
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
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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


        </main>
    </div>
    <div id="modal-app" class="modal-app">
        <div id="content-modal-app" class="content-modal-app">

        </div>
    </div>
    <script src="{{URL::asset('assets/js/funtions.js')}}"></script>

</body>
</html>

