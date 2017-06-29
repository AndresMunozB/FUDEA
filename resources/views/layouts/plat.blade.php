<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>FUDEA - @yield('title')</title>
=======
    <title>FUDEA - UNIVERSIDAD SANTIAGO DE CHILE - @yield('title')</title>
>>>>>>> 3889316a2f1084d94fef0568e2575ebc24823ab6

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
                <a class="navbar-brand" href="{{route('home')}} ">
                <img alt="Brand" src="{{ asset('images/fudea.png') }}">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse" style="padding-left: 10em">
                <!-- Left Side Of Navbar -->
                <a href=" {{route('home')}} " class="btn navbar-btn @if($pagina == 'inicio')active @endif" role="button">Inicio</a>
                @role('admin')
                <a href=" {{route('users_path')}} " class="btn navbar-btn @if($pagina == 'usuarios')active @endif" role="button">Usuarios</a>
                <a href=" {{route('forms_path')}} " class="btn navbar-btn @if($pagina == 'solicitudes')active @endif" role="button">Solicitudes</a>
                <a href="#" class="btn navbar-btn @if($pagina == 'convenios')active @endif" role="button">Convenios</a>
                <a href=" {{route('create_form_path')}} " class="btn navbar-btn @if($pagina == 'formulario')active @endif" role="button">Formulario</a>
                @endrole
                @role('ejecutivo')
                <a href="#" class="btn navbar-btn @if($pagina == 'socios')active @endif" role="button">Socios</a>
                <a href=" {{route('forms_path')}}" class="btn navbar-btn @if($pagina == 'solicitudes')active @endif" role="button">Solicitudes</a>
                <a href="#" class="btn navbar-btn @if($pagina == 'mensajes')active @endif" role="button">Mensajes</a>
                <a href=" {{route('create_form_path')}} " class="btn navbar-btn @if($pagina == 'formulario')active @endif" role="button">Formulario</a>
                @endrole
                @role('socio')
                
                @endrole
                @role('empresa')
                
                @endrole
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="dropdown">
                        <a href="#" class="navbar-btn dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                    class="btn navbar-btn">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('layouts.scripts')
</body>
</html>
