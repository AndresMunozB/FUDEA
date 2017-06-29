@extends('layouts.plat')

@php ($pagina = 'formulario')

@section('title')
Formulario
@endsection

@php ($pagina = 'solicitudes')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Formulario
                </div>
                <div class="panel-body">
                <p>Rut: {{$form->rut}} </p>
                <p>Name: {{$form->name}} </p>
                </div>
                <div class="panel-footer">
                
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
