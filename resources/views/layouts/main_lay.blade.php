<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Obatap') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/welcome.css">
</head>
<body class="body-bg">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-back  shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand pt-0" href="{{ url('/') }}">
                    <img class="mt-0" src="{{ asset('img/obatap/obatap-icon-30-35.png') }}" alt="Obatap icon">
                    <span class="obatap-icon-span-l obatap-icon-font">Oba<span class="obatap-icon-span-r obatap-icon-font">tap</span></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ml-2">
                        <form action="" class="form-inline">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                {{-- Services dropdown --}}
                                <button type="button" class="btn btn-outline-secondary dropdown-toggle text-white" data-target="#services" data-toggle="dropdown" >Services</button>
                                <div class="dropdown-menu" id="services">
                                    <button class="btn dropdown-item">Plane reservation</button>
                                    <button class="btn dropdown-item">Bus & City traffic reservation</button>
                                    <button class="btn dropdown-item">Ship reservation</button>
                                </div>
                                </div>
                            </div>
                            <input type="search" name="searchAgency" id="searchAgency" class="form-control btn-outline-dark no-border-radius" style="width:400px;">
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary text-white" style="border-top-left-radius: 0%; border-bottom-left-radius: 0%" type="button">Search</button>
                            </div>
                        </form>
                    </ul>
                </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content-body')
        </main>

        <footer>
            <div class="container-fluid pt-2 pb-2">
                    <div class="card text-center body-bg pt-2 pb-2 no-border">
                        <p class="text-center mt-5">
                            <img  src="{{ asset('img/obatap/obatap-icon-41-48.png') }}" alt="">
                        </p>

                        {{-- <p class="card-text">&copy; {{ date('Y') }} &middot; Obatap by <a href="#">@ElijahBus</a></p> --}}
                    </div>
            </div>
        </footer>
    </div>
</body>
</html>
