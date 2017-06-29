@extends('layouts.plat')

@php ($pagina = 'solicitudes')

@section('title')
Hazte Socio
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Solicitudes
                </div>
                <div class="panel-body">
                @if($forms->count() > 0)
                    @include('plat.formulario.part_index', ['forms' => $forms])
                @else
                    <div class="text-center">
                        <h3>No existen solicudes pendientes</h3>
                    </div>
                @endif
                </div>
                <div class="panel-footer">
                <center>{{ $forms->links() }}</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
