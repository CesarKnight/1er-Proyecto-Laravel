@extends('layouts.plantilla')
@section('title','Create a Category')

@section('content')
  <h1>  Creacion de Categoria (el horror) </h1>
    
    <form action="{{route('categories.store')}}" method="POST">

        @csrf

        <label for=""> 
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description " cols="10" rows="3"></textarea>
        </label>
        <br>
        <button type="submit"> Enviar cochinada </button>
    </form> 
@endsection