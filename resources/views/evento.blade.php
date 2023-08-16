<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
<ul>
<h1>NOTICIAS</h1>
@foreach ($eventos as $evento)
    <strong>ticket:</strong> {{ $evento->ticket_numero }}<br>

    <strong>descripcion:</strong> {{ $evento->descripcions }}<br>
@endforeach

</ul>
</body>
</html>