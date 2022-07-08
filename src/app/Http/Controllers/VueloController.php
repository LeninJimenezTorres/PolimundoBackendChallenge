<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function index(){
        $vuelos = Vuelo::all();
        return view('vuelos.index',compact('vuelos'));
    }
    public function show($id){
        $vuelo=Vuelo::find($id);
        return view('vuelos.show',compact('id','vuelo'));
    }
}
