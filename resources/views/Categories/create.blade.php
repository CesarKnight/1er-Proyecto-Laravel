@extends('layouts.plantilla')
@section('title','Crear una categoria')

@section('content')
  <h1>  Creacion de Categoria (el horror) </h1>
    
    <form action="{{route('categories.store')}}" method="POST">

        @csrf

        <label for=""> 
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
            
            @error('name')
                <br>
                    <span>  {{$message}}*   </span>
                <br>    
            @enderror
        </label>
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="3">{{old('description')}}</textarea>
            
            @error('description')
                <br>
                    <span>  {{$message}}*   </span>
                <br>    
            @enderror
        </label>
        <br>
        <button type="submit"> Enviar cochinada </button>
    </form> 
@endsection