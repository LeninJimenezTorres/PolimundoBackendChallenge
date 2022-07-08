@extends('layouts.plantilla')
@section('title','Usuarios')

@section('content')
    <h1>Lista de todos los usuarios</h1>
    <ul>
        @foreach ($usuarios as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection