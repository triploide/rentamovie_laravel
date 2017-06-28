<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actors</title>
</head>
<body>
    <h1>Actors</h1>
    <ul>
        @foreach($actors as $actor)
            <li><a href="actors/{{$actor->id}}">{{ $actor->getNombreCompleto() }}</a> - <a href="#">Edit</a></li>
        @endforeach
    </ul>
</body>
</html>