<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index()
    {

        $roles = DB::table('rol')->get();
        return view('registrar')->with('roles', $roles);
    }
    public function crear(Request $request){

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
            'clave' => 'required',
            'claveConf' => 'required',
            'idRol' => 'required'
        ]);

        $usuarios = new Usuarios();
        $usuarios->nombres = $request->input('nombres');
        $usuarios->apellidos = $request->input('apellidos');  
        $contra = $request->input('clave');  
        $usuarios->clave = Hash::make($contra);
        $usuarios->correo = $request->input('correo');  
        $usuarios->idRol = $request->input('idRol');  

        $usuarios->save();
        if($usuarios->idRol == 1)
        {
            
            return redirect()->route('publicacionAdmin.indexAdmin');
        }else if($usuarios->idRol == 2)
        {
            return redirect()->route('publicacion.index');
        }
    }
}
