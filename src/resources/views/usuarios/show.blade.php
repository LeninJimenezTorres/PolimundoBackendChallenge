@extends('layouts.plantilla')
@section('title','Usuario Específico')

@section('content')
    <h1>Datos de usuario especifico</h1>
    <p>Usuario Id: {{$id}}</p>

    <div>
        <h2>Datos</h2>
        <div>
            @if (isset($usuario))
                {{$usuario}}
            @else
                <p>usuario no encontrado</p>
            @endif
        </div>
    </div>
@endsection