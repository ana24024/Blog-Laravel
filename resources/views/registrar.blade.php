<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h4 style="text-align: center; margin-top:60px">Registrar Usuario</h4>
    <div class="container-sm" style="width: 400px; background:rgb(226, 241, 247); padding: 40px;">
        <form method="POST" action="{{route('registro.crear')}}">
            @csrf
            @error('nombres')
            <small class="text-danger">*{{$message}}</small>
            @enderror
            <input type="text" name="nombres" placeholder="Nombres" class="form-control" value="{{old('nombres')}}"><br>

            @error('apellidos')
            <small class="text-danger">*{{$message}}</small>
            @enderror
            <input type="text" name="apellidos" placeholder="Apellidos" class="form-control" value="{{old('apellidos')}}"><br>

            @error('correo')
            <br>
            <small class="text-danger">*{{$message}}</small>
            @enderror
            <input type="email" name="correo" placeholder="ejemplo@gmail.com" class="form-control" value="{{old('correo')}}"><br>

            @error('clave')
            <br>
            <small class="text-danger">*{{$message}}</small>
            @enderror
            <input type="password" name="clave" placeholder="clave" class="form-control" value="{{old('clave')}}"><br>

            @error('claveConf')
            <br>
            <small class="text-danger">*{{$message}}</small>
             @enderror
            <input type="password" name="claveConf" placeholder="Confirmacion de clave" class="form-control" value="{{old('claveConf')}}"><br>
            <select class="form-control" name="idRol">
                @foreach ($roles as $rol)
                    <option value="{{$rol->idRol}}">{{$rol->rol}}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" class="btn btn-primary" value="Registrar">
        </form>
    </div>
    
</body>
</html>