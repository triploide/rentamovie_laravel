<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Película</title>
</head>
<body>
	<h1>Película</h1>
	<ul>
		@foreach($resultado as $pelicula)
			<li>{{$pelicula->titulo}}</li>
		@endforeach
	</ul>
</body>
</html>