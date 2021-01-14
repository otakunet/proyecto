@extends('layout')


@section('contenido')


<h1>todos los mensajes</h1>

<table>
	
	<thead>
		
		<tr>
			
			<th>nombre</th>

			<th>email</th>

			<th>mensaje</th>

		</tr>

	</thead>

	<tbody>
		
		@foreach( $message as $messages )

			<td>{{ $messages->nombre }} </td>

			<td>{{ $messages->email }} </td>

			<td>{{$messages->mensaje }} </td>

		@endforeach

	</tbody>

</table>


@stop