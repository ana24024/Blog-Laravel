<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{

    //use HasFactory;
    protected $table= "publicacion";
    public $timestamps = false;
    protected $primaryKey = "idPublicacion";
    protected $datosPublicacion = ['titulo', 'contenido','fechaPublicacion']; 
}
