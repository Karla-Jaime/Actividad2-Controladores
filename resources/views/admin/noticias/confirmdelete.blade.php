<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar eliminación</title>
</head>
<body>
    
    <a href="{{ route("admin.noticias.index") }} ">Volver a lista de noticias</a>

    <h1>Confirmar eliminación de noticia: {{ $noticia->id }}</h1>

    <p>¿Está seguro de que desea eliminar la noticia: {{ $noticia->titulo }}?</p>
    
    @csrf
    <form method="POST" action="{{ route("admin.noticias.destroy"), $noticia ->id}} ">
    @method("delete")
    <a href="{{ route("admin.noticias.index") }} "><button type="button">Cancelar</button></a>
    <button type="submit">Confirmar</button>
    </form>
    

</body>    
</html>