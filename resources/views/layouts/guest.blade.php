<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
</head>
<body>
    <div class=" navcontainer">
        <nav class="navbar navbar-expand-lg  " >
            <div class="container-fluid  ">
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">home</a>
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="#blog">blog</a>
                        <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="#recenzii">recenzii</a>
                        <a href="/login" class="btn btn-bg-light border px-4 py-2 me-3">
                            <i class=""></i>
                            Log In
                        </a>
                        <a href="/register" class="btn btn-bg-dark border  px-4 py-2">
                            <i class=""></i>
                            Register
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')
    <footer class="mt-5  d-flex align-items-center justify-content-center  ">
        <div class="d-flex align-center justify-content-center ">
            <p class="my-5">
                Rosca Filadelfia Examen 2024/ Varianta16 <a href="/"></a>
            </p>
        </div>
    </footer>
</body>
</html>
