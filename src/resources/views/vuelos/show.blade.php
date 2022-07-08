@extends('layouts.plantilla')
@section('title','Vuelo Específico')

@section('content')
    <h1>Datos de vuelo especifico</h1>
    <p>Vuelo Id: {{$id}}</p>
    
    <div>
        <h2>Datos</h2>
        <div>
            @if (isset($vuelo))
                {{$vuelo}}
            @else
                <p>vuelo no encontrado</p>
            @endif
        </div>
    </div>
@endsection