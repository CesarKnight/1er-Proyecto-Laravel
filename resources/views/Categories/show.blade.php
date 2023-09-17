@extends('layouts.plantilla')
@section('title','Showing '.$category->name)
@section('content')
    <h1> omg te gustó {{$category->name}} ? </h1>
    <p>{{ $category->description }}</p>

    <a href="{{route('categories.index')}}"> Volver al indice de la Galeria</a>
@endsection