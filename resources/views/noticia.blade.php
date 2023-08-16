<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
        <h1>NOTICIAS</h1>
        @foreach($noticias as $n)
            <p><p>ID:</p>{{$n['id']}}</p>
            <p><p>TITULO:</p>{{$n['titulo']}}</p>
            <p><p>DESCRIPCION:</p>{{$n['Descripcion']}}</p>
            <p><p>---------------------------------------------</p>
        @endforeach
    </div>
</body>
</html>