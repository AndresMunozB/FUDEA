@extends('layouts.app1')
@php ($pagina ='solicitudes')
@section('title')
Editar usuario
@endsection
@section('content')
	@if(count($errors) > 0 )
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li> {{$error}} </li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action=" {{ route('update_form_path', ['form'  => $form->id])  }} " method="POST">

		{{ csrf_field() }}
		{{ method_field('PUT') }}

		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control" value=" {{ $post->title }} ">
		</div>
		<div class="form-group">
			<label for="description">Description:</label>
			<textarea rows="5" name="description" class="form-control" > {{ $post->description }}</textarea>
		</div>
		<div class="form-group">
			<label for="url">URL:</label>
			<input type="text" name="url" class="form-control" value="{{ $post->url }}">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" > Edit Post</button>
		</div>

	</form>
@endsection