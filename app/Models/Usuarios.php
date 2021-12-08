<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    protected $table= "usuario";
    public $timestamps = false;

    protected $primaryKey = "idUsuario";
    protected $datosPublicacion = ['nombres', 'apellidos','correo', 'clave','idRol']; 
}
