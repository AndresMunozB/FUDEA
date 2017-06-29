@extends(Auth::check() ? 'layouts.plat' : 'layouts.inicio')
@php ($pagina = 'formulario')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
			
			<form action="{{ route('store_form_path') }}" method="POST">
				<div class="panel panel-default">
					@if(count($errors) > 0 )
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li> {{$error}} </li>
							@endforeach
						</ul>
					</div>
					@endif
					{{ csrf_field() }}
					<div class="panel-heading">Formulario </div>
					<div class="panel-body">
						<div class="form-group row">
							<div class="col-md-6">
								<label for="rut">Rut:</label>
								<input type="text" name="rut" class="form-control" value="{{ old('rut') }}" placeholder="12.345.678-9">
							</div>							
							<div class="col-md-6">
								<label for="name">Nombre:</label>
								<input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nombre">
							</div>
						</div>
						
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary" > Enviar formulario</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection