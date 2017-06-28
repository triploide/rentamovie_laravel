<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $actor->getNombreCompleto() }}</title>
</head>
<body>
    <h1>{{ $actor->getNombreCompleto() }}</h1>
    <p>Rating: {{ $actor->rating }}</p>
</body>
</html>