<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts --> 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
body{
background-color: #E5D9B6 ;
font-family: 'Inter', sans-serif;
}

 h1,h2,h3,h4,h5,h6{
font-family: 'Playfair Display', serif;
}

.navbar-brand{
font-family: 'Playfair Display', serif;
color: #285430;
}

.navbar-nav .active{
border-bottom: #285430 solid 3px;
}

.hero-section{
background: url("../img/shirt.jpg") no-repeat;
height: 100vh;
background-size: cover;
background-attachment: fixed;
background-position: center;
}

.btn-dark-green{
background-color: #285430;
color: white;
text-transform: uppercase;
border: none;
padding: 10px 20px;
}

</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                    <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                    EcoThread
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
<li class="nav-item "><a href="/" class="nav-link {{request()->is('/') ?
'active' : ''}}">Home</a></li>
<li class="nav-item "><a href="/shop" class="nav-link {{request()->is('shop') ?
'active' : ''}}">Shop</a></li>
<li class="nav-item "><a href="#" class="nav-link {{request()->is('contact') ?
'active' : ''}}">Contact</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">

                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
<div class="vr"></div>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <div class="vr"></div>
                        @else
                            <li class="nav-item dropdown">
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
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
