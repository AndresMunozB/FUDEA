<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FUDEA - @yield('title')</title>

    @include('layouts.styles')
<style>

    body 
    {
        background-image: url("https://static1.squarespace.com/static/574472fbd51cd42eed21b47e/t/58f8d5a237c58152adaf3830/1492702628971/EAO-Fudea-Usach-Banner-%281%29.jpg?format=2500w");
        background-size: 100% 100%;
        background-attachment: fixed;
    }

</style>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a href="{{route('raiz')}} ">
                <img alt="Brand" src="{{ asset('images/fudea.png') }}">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse" style="padding-left: 10em">
                <!-- Left Side Of Navbar -->
                <a href="/" class="btn navbar-btn @if($pagina == 'inicio')active @endif" role="button">Inicio</a>
                <a href="#" class="btn navbar-btn @if($pagina == 'convenios')active @endif" role="button">Convenios</a>
                <a href=" {{route('create_form_path')}} " class="btn navbar-btn @if($pagina == 'formulario')active @endif" role="button">Formulario</a>
                <a href="#" class="btn navbar-btn @if($pagina == 'desarrolladores')active @endif" role="button">Desarrolladores</a>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-right">
                    <!-- Authentication Links -->
                    <a href="{{ route('login') }}" class="btn navbar-btn @if($pagina == 'login')active @endif">Iniciar sesión</a>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('layouts.scripts')
</body>
</html>