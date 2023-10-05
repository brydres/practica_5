<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(Request $datosDelPost)
    {
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->nombre = $datosDelPost->nombre;
        $nuevoUsuario->apellido = $datosDelPost->apellido;
        $nuevoUsuario->correo = $datosDelPost->correo;
        $nuevoUsuario->contra = $datosDelPost->contra;
        $nuevoUsuario->save();
        return "El usuario se registro exitosamente";
    }
}