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
                <div class="panel-heading text-center">Resumen 1</div>
                <div class="panel-body"></div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading text-center">Resumen 2</div>
                <div class="panel-body"></div>
                <div class="panel-footer"></div>
                
            </div>
        </div>
    </div>
</div>
@endsection
