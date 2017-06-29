@extends('layouts.inicio')

@php ($pagina = 'usuarios')

@section('title')
Registrarse
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" role="form" action="{{ route('update_user_path',['user' => $user->id]) }}" method="POST">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo usuario</div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6{{ $errors->has('rut') ? ' has-error' : '' }}">
                                <label for="rut">RUT</label>
                                <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}" placeholder="Ingrese el RUT" oninput="formatRUT()" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="name">Nombre</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ingrese el nombre" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="col-md-8{{ $errors->has('rut') ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese el email" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                            	<label for="tipo" class="col-md-8 control-label">Tipo de usuario:</label>
                                <select class="form-control" name="tipo">
                                   	<option value="administrador">Administrador</option>
                                    <option value="ejecutivo">Ejecutivo</option>
                                    <option value="empresa">Empresa</option>
                                    <option value="socio">Socio</option>
                                </select>
                        	</div>
                        </div>                             
                        
                        <div class="form-group row">
                            <div class="col-md-6{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Ingrese la contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="password-confirm">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repita la email">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">
                            Crear usuario
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
