<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $noticia["titulo"]}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>  
        <a href="{{route("noticias")}}">Volver a noticias</a>
        <h1>{{ $noticia["titulo"]}}</h1>
        <p>{{ $noticia["fecha"]}}</p>
        <h4>{{ $noticia["autor"]}}</h4>
        <img src=" {{$noticia["foto"]}}" />
        <p>{{ $noticia["cuerpo"]}}</p>

      

</body>
</html>