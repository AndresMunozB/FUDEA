@extends('layouts.plat')

@php ($pagina = 'consultas')


@section('title')
Medidas
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                
                <div class="panel-heading text-center">Consultar socio</div>
                <div class="panel-body text-center">
                    <form  class="form-inline" action=" {{ route('consulta_path')}} " method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="rut">RUT:</label>
                            <input type="text" name="rut" class="form-control" id="rut" placeholder="12.345.678-9" oninput="formatRUT()" required autofocus>
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </div>
                    </form>
                <div class="panel-footer">

                    @if($consulta == 'true')
                    <div class="alert alert-success">
                        El rut {{$rut}} es socio de FUDEA.
                    </div>
                    @endif

                    @if($consulta == 'false')
                    <div class="alert alert-danger">
                        El rut {{$rut}} <strong>NO</strong> es socio de FUDEA.
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


