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
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>

</body>
</html>

