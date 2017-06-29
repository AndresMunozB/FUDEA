@extends('layouts.inicio')

@php ($pagina = 'inicio')

@section('title')
Inicio
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); background-color: #FFFFFF; height: auto; -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;>
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    SÚMATE: ¡SOMOS VÍA!
                </div>
                <div class="panel-body">
                <p>La fundación de egresados y amigos de la Universidad de Santiago de Chile (Fudea), tiene como fin fortalecer la identidad y pertenencia de quienes han sido formados en esta casa de estudios y de aquellos que comparten sus principios y valores.Fudea, a través de diversos ámbitos del conocimiento, promueve la cooperación mutua y permanente entre los egresados, amigos y la Universidad, en virtud del progreso sociocultural de nuestro país.</p>
                </div>
                <div class="panel-footer">
                <a href="{{route('create_form_path')}}"><center> <button class="btn btn-primary pull-center" > ¡Hazte Socio!</button> </center> </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection