@extends('layouts.plat')

@php ($pagina = 'inicio')

@section('title')
Inicio
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading text-center">Catástrofes recientes</div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading text-center">Medidas que requieren ayuda</div>
                
            </div>
        </div>
    </div>
</div>
@endsection
