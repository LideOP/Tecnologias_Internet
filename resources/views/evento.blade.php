<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIAS</title>
</head>
<body>
    <div style= "background: #f1f1f1; with:45%; height:150%"></div>
        <h1>NOTICIAS</h1>
        @foreach ($noticias as $n)
        <p><b>ID:</b>{{$n['id']}}</p>
        <p><b>TITULO:</b>{{$n['tichet_numero']}}</p>
        <p><b>DESCRIPCION:</b>{{$n['descripcion']}}</p>
        <p><b>----------------------</b></p>
        @endforeach
</body>
</html>