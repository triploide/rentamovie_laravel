@php
    $genres = \App\Genre::orderBy('name')->get();
@endphp
<div class="block clearfix">
    <h3 class="title">Géneros</h3>
    <div class="separator-2"></div>
    <nav>
        <ul class="nav nav-pills nav-stacked">
            @foreach ($genres as $genre)
                <li><a href="/genero/{{$genre->id}}">{{$genre->name}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>