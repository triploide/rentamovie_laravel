<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo', 'Rent a Movie')</title>
</head>
<body>

	<h1>Banner</h1>
	
	@section('nav')
	<nav>
		<ul>
			<li>Nav</li>
			<li>Por</li>
			<li>Default</li>
		</ul>
	</nav>
	@show

	<main class="container">
		@yield('content')
	</main>

	@yield('footer')

</body>
</html>