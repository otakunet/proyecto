@extends('layout')


@section('contenido')
	

	<h1>Contactos</h1>
	
	<h2>Escribeme</h2>

	<form method="POST" action="contacto">

		<p><label for="nombre">
			
			Nombre

			<input type="text" name="nombre">

		</label></p>

			<p><label for="email">
			
			Email

			<input type="email" name="email">

		</label></p>

		</label></p>

			<p><label for="mensaje">
			
			Mensaje

			<textarea name="mensaje"></textarea>

		</label></p>

		<input type="submit" value="Enviar">


	</form>

@stop