@extends('layouts.inicio')

@php ($pagina = 'inicio')

@section('title')
Inicio
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    SÚMATE: ¡SOMOS VÍA!
                </div>
                <div class="panel-body">
                <p>La Fundación de Egresados y Amigos de la Universidad de Santiago de Chile (Fudea), tiene como fin fortalecer la identidad y pertenencia de quienes han sido formados en esta Casa de Estudios y de aquellos que comparten sus principios y valores.Fudea, a través de diversos ámbitos del conocimiento, promueve la cooperación mutua y permanente entre los Egresados, Amigos y la Universidad, en virtud del progreso sociocultural de nuestro país.</p>
                </div>
                <div class="panel-footer">
                <center> <button class="btn btn-primary pull-center" > Hazte Socio!</button> </center> 
                </div>

            </div>
        </div>
    </div>
</div>
@endsection