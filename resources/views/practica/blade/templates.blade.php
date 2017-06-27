<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Templates</title>
</head>
<body>
	@include('partials._titulo')
	{{--
		@if(count($errores))
			<ul>
				@foreach($errores as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@else
			<p>No hay errores</p>
		@endif
	--}}

	<ul>
		@forelse($errores as $error)
			<li>{{ $error }}</li>
		@empty
			<li>No hay errores</li>
		@endforelse
	</ul>

</body>
</html>