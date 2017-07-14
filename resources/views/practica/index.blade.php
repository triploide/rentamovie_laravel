<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Práctica</title>
</head>
<body>
    <h1>Práctica</h1>

    <h2>Collections</h2>
    <ul>
        <li><a href="/practica/collections">Collections</a></li>
        <li><a href="/practica/collections/filter">Filter</a></li>
        <li><a href="/practica/collections/map">Map</a></li>
        <li><a href="/practica/collections/each">Each</a></li>
        <li><a href="/practica/collections/keyBy">keyBy</a></li>
        <li><a href="/practica/collections/groupBy">groupBy</a></li>
    </ul>

    <h2>Rutas</h2>
    <ul>
        <li><a href="/practica/rutas/con-un-parametro/test">Con un parámetro</a></li>
        <li><a href="/practica/rutas/con-dos-parametros/lorem/ipsum">Con dos parámetros</a></li>
        <li><a href="/practica/rutas/parametro-por-defecto">Parámetro por defecto</a></li>
        <li>
            <form action="/practica/rutas/method/post" method="post">
                {{csrf_field()}}
                <input type="submit" value="Método Post">
            </form>
        </li>
        <li>
            <form action="/practica/rutas/method/put" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" value="Método Put">
            </form>
        </li>
    </ul>

    <h2>Blade</h2>
    <ul>
        <li><a href="/practica/blade/pasando-parametros-a-la-vista">Pasar parámetros a la vista</a></li>
        <li><a href="/practica/blade/forelse">Forelse</a></li>
        <li><a href="/practica/blade/herencia">Herencia</a></li>
    </ul>

    <h2>Relaciones</h2>
    <ul>
        <li><a href="/practica/relaciones">Relaciones</a></li>
        <li><a href="/practica/relaciones/query-builder">Query Builder</a></li>
        <li><a href="/practica/relaciones/with">With</a></li>
        <li><a href="/practica/relaciones/associate">Associate</a></li>
        <li><a href="/practica/relaciones/save">Save</a></li>
        <li><a href="/practica/relaciones/saveMany">Save Many</a></li>
        <li><a href="/practica/relaciones/sync">Sync</a></li>
    </ul>

    <h2>Misceláneos</h2>
    <ul>
        <li><a href="/practica/miscelaneos/factory">Factory</a></li>
        <li><a href="/practica/miscelaneos/api">Api</a></li>
    </ul>
</body>
</html>