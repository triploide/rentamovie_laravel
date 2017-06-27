<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actores</title>
</head>
<body>
	<h1>Actores</h1>
	<ul>
		@foreach($actores as $actor)
			<li>{{$actor->getNombreCompleto()}}</li>
		@endforeach
	</ul>
</body>
</html>