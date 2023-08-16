<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
        <h1>Edades</h1>
        @foreach($edad as $n)
            
            <p><p>EDAD:</p>{{$n['edad']}}</p>
            <p><p>NOMBRE:</p>{{$n['nombre']}}</p>
            
            @if ($n['edad']>=18)
            <p><p>Es mayor de edad</p>
            @else
            <p>Es menor de edad {{$n['nombre']}}</p>
            @endif
        @endforeach
    </div>
</body>
</html>