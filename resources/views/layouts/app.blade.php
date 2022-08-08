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
    <header class="content-header">
        <div class="content-header-logo">
            <img src="{{URL::asset('assets/img/icons/logo.png')}}" alt="" srcset="">
        </div>
       
    </header>

    <main class="main-content">
        @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @include('layouts.navbars.sidebar')
    @endauth
        @yield('content')
    </main>
</body>
</html>
        
        