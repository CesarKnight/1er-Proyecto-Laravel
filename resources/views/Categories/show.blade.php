@extends('layouts.plantilla')
@section('title',''.$category->name)
@section('content')
    <h1> omg te gustó {{$category->name}} ? </h1>
    <p>{{ $category->description }}</p>
    <a href="{{route('categories.edit', $category)}}"> Editar</a>
    <br> <br>

    <a href="{{route('categories.index')}}"> Volver al indice de la Galeria</a>
@endsection