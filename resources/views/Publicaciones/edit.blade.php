<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar Publicacion</title>
</head>
<body>
    <h4 style="text-align: center; margin-top: 40px;">Actualizar Publicacion</h4>
        <div class="container" style="width: 800px;">
            <form action="{{route('publicacion.actualizar', $publicaciones->idPublicacion)}}" method="POST">
                @csrf
                @error('titulo')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                @enderror
                <br>
                <input type="text" class="form-control" name="titulo" placeholder="Titulo" value="{{old('titulo',$publicaciones->titulo)}}"><br>
                @error('contenido')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                @enderror
                <input type="text" class="form-control" name="contenido" placeholder="Contenido" value="{{old('contenido',$publicaciones->contenido)}}"><br>
            
                <input type="submit" value="Guardar" class="btn btn-primary btn-md">
                <input type="reset" value="Cancelar" class="btn btn-secondary btn-md">
            </form>
        </div>
</body>
</html>