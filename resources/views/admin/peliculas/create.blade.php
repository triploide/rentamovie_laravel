<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Película</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {padding: 30px}
        form {background-color: #f3f3f3; padding: 20px;}
    </style>
</head>
<body>
    @if(count($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Agregar Película</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="title" id="titulo" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="premios">Premios</label>
                        <input type="number" name="awards" id="premios" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="duracion">Duración</label>
                        <input type="number" name="length" id="duracion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="estreno">Fecha de estreno</label>
                        <input type="date" name="release_date" id="estreno" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="banner">Banner</label>
                        <input type="file" name="banner" id="banner" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="enviador" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>