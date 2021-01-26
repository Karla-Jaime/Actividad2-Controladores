<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Noticias-Lista</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h1>Noticias</h1>
    @foreach($noticias as $noticia)        
        <h3>{{ $noticia["titulo"]}}</h3>
        <p>{{ $noticia["fecha"]}}</p>

    @endforeach
</body>
</html>