<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios=Usuario::all();
        return view('usuarios.index',compact('usuarios'));
    }
    public function show($id){
        $usuario=Usuario::find($id);
        //return view('usuarios.show',['id'=>$id]);
        return view('usuarios.show',compact('id','usuario'));
    }
}
