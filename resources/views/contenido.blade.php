<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
<div style= "background: #f1f1f1; with:45%; height:150%"></div>
        <h1>Datos persona</h1>
        @foreach ($datos as $d)
        <p><b>NOMBRE:</b>{{$d['nombre']}}</p>
        <p><b>EDAD:</b>{{$d['edad']}}</p>
        <p><b>----------------------</b></p>
        
            @if ( $d['edad'] > 18 )
            Es mayor de edad
            @elseif ($d['edad'] < 18)
            Es menor de edad
            @endif
        @endforeach
        
</body>
</html>