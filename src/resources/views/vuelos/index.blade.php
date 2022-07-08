@extends('layouts.plantilla')
@section('title','Vuelos Disponibles')

@section('content')
    <h1>Lista de todos los vuelos disponibles</h1>
    <ul>
        @foreach ($vuelos as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection