@extends('master')

@section('titulo', 'Nuevo Título') 

@section('nav')
<nav>
	<ul>
		<li>Lorem</li>
		<li>Ipsum</li>
		<li>Dolor</li>
	</ul>
</nav>
@parent
@endsection

@section('content')
<h2>Contenido</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection