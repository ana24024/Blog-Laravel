<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Publicaciones;
use App\Models\Usuarios;
use Carbon\Carbon;
use DateTime;

class PublicacionesController extends Controller
{
    public function index()
    {
        //$publicaciones = Publicaciones::all();
      
        $publicaciones = DB::table('publicacion')->get();
        return view('Publicaciones.index')->with('publicaciones', $publicaciones);
    }
    public function indexAdmin()
    {
        //$publicaciones = Publicaciones::all();
      
        $publicaciones = DB::table('publicacion')->get();
        return view('Publicaciones.indexAdmin')->with('publicaciones', $publicaciones);
    }

    public function crear(Request $request){
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);
        $date = Carbon::now();
        
        $publicaciones = new Publicaciones;
        $publicaciones->titulo = $request->input('titulo');
        $publicaciones->contenido = $request->input('contenido');  
        $publicaciones->fechaPublicacion = $date;
     
        $publicaciones->save();
        return redirect()->route('publicacion.index');
    }
    public function crearAdmin(Request $request){
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);
        $date = Carbon::now();
        
        $publicaciones = new Publicaciones;
        $publicaciones->titulo = $request->input('titulo');
        $publicaciones->contenido = $request->input('contenido');  
        $publicaciones->fechaPublicacion = $date;
     
        $publicaciones->save();
        return redirect()->route('publicacionAdmin.indexAdmin');
    }

    public function editar($idPublicacion){
        $publicaciones = Publicaciones::findOrFail($idPublicacion);
        return view('Publicaciones.edit')->with('publicaciones', $publicaciones);
    }

    public function actualizar(Request $request, $idPublicacion){
        $publicaciones = Publicaciones::findOrFail($idPublicacion);
        $publicaciones->titulo = $request->input('titulo');
        $publicaciones->contenido = $request->input('contenido');
        $publicaciones->save();
        return redirect()->route('publicacion.index');
    }

    public function eliminar($idPublicacion){
        $publicaciones = Publicaciones::findOrFail($idPublicacion);
        $publicaciones->delete();
        return redirect()->route('publicacion.index');
    }
    public function ocultar($idPublicacion){
        $publicaciones = Publicaciones::findOrFail($idPublicacion);
    
        return view('Publicaciones.edit')->with('publicaciones', $publicaciones);
    }
}
