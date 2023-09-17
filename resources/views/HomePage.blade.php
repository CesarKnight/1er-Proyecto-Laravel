@extends('layouts.plantilla')
@section('title', 'Homepage')

@section('content')
    <h1> bienvenido a la pagina del arte mas tremendo xd </h1>
    <a href={{route('categories.index')}}> Ver todas las categorias de cochinadas </a>
@endsection
