@extends('layout')

@section('contenido')	

	<h1>Contactos</h1>
	
	<h2>Escribeme</h2>

	<form method="POST" action="contacto">

		<!--<input type="hidden" name="_token" value=" {{ csrf_token() }} ">-->

		{!! csrf_field() !!}

		<p><label for="nombre">
				
				Nombre

			<input type="text" name="nombre" value="{{ old('nombre') }} ">

			{!! $errors->first('nombre', '<span class="error">:message</span>') !!}

		</label></p>

			<p><label for="email">
			
				Email

			<input type="email" name="email" value="{{ old('email') }} ">

			{!! $errors->first('email', '<span class="error">:message</span>') !!}

		</label></p>

		</label></p>

			<p><label for="mensaje">
			
				Mensaje

			<textarea name="mensaje" value="{{ old('mensaje') }} "></textarea>

			{!! $errors->first('mensaje', '<span class="error">:message</span>') !!}

		</label></p>

		<input type="submit" value="Enviar">

	</form>

@stop