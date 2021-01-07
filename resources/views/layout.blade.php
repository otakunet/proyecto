<!DOCTYPE html>
<html>
<head>
	<title>home</title>

	<style type="text/css">
		
		.active{

			text-decoration: none;

			color: green;

		}

		.error{

			color:red;

			font-size: 12px;
		}

	</style>

</head>
<body>

	<header>

		<?php 
			function activeMenu($url){

				return request()->is($url)? 'active' : '';

			}
		?>
		
		<nav>
			
			<a class="{{activeMenu('/')}}" href="{{route('home')}}">Home</a>

			<a class="{{activeMenu('saludos/*')}}" href="{{route('saludos',"jesus")}}">Saludo</a>

			<a class="{{activeMenu('contactame')}}" href="{{route('contacto')}}">Contacto</a>

		</nav>

	</header>

	@yield('contenido')

</body>
</html>