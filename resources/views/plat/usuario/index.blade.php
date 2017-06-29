@extends('layouts.plat')

@php ($pagina = 'usuarios')

@section('title')
Usuarios
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h3>Usuarios</h3> 
                    
                </div>

                
                <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-success btn-xs pull-right" href="{{ route('register') }}">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            + Usuario
                        </a>
                    </div>
                </div>
                @if($usuarios->count() > 0)
                    @include('plat.usuario.part_index', ['usuarios' => $usuarios])
                @else
                    <div class="text-center">
                        <h3>No existen usuarios en el sistema</h3>
                    </div>
                @endif
                </div>
                <div class="panel-footer">
                <center>{{ $usuarios->links() }}</center> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
