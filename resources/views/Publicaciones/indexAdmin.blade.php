<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Publicaciones</title>
</head>
<body>
    @include('layouts/menu')
    <div class= "container" style="width: 800px;">
        <h4 style="text-align: center; margin-top:30px;">Gestion de Publicaciones</h4>
        <div class="container-fluid" style="width: 500px">
            <form action="{{route('publicacionAdmin.agregarAdmin')}}" method="POST" >
                @csrf
                @error('titulo')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                @enderror
                <br>
                <input type="text" class="form-control" name="titulo" placeholder="Titulo" value="{{old('titulo')}}"><br>
                @error('contenido')
                    <br>
                    <small class="text-danger">*{{$message}}</small>
                @enderror
                <input type="text" class="form-control" name="contenido" placeholder="Contenido" value="{{old('contenido')}}"><br>
           
                <input type="submit" value="Publicar" class="btn btn-primary btn-md">
                
            </form>
        </div>
        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-1 g-4 ">
            @foreach ($publicaciones as $publicacion)
            <div class="col">
                <div class="card" style="background: rgb(226, 241, 247)">
                    
                    <div class="card-body ">
                        <h4 class="card-title">{{$publicacion->titulo}}</h4>
                        <p class="card-text">{{$publicacion->contenido}}</p>
                        <div class="form-inline">
                            <a href="#" class="btn btn-primary">Ocultar</a>
                        </div>
                        

                    </div>
                   
                    <br>        
                   
                </div>
            </div>
            @endforeach
        </div>
            
    </div>
</body>
</html>
