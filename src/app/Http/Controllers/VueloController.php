<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function index(){
        return ('Vuelos');
    }
    public function show($id){
        return ('Vuelo especifico '.$id);
    }
}
