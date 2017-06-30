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
	<h1>{{ $movie->title }}</h1>
	<img class="img-responsive" src="{{asset('/storage/peliculas/'.$movie->banner)}}">
</body>
</html>