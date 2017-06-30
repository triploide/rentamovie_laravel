<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Películas</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		body {
			padding: 30px
		}
	</style>
</head>
<body>
	<h1>Películas</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Título</th>
				<th>Premios</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($movies as $movie)
				<tr>
					<td>{{ $movie->title }}</td>
					<td>{{ $movie->awards }}</td>
					<td><a href="/admin/peliculas/{{$movie->id}}/edit">Editar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $movies->links() }}
</body>
</html>