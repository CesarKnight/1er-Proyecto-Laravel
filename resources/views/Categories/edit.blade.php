@extends('layouts.plantilla')
@section('title','Editar una categoria')

@section('content')
  <h1> Editar la categoria (ajajaj te equivocaste) </h1>
    
    <form action="{{route('categories.update',$category)}}" method="POST">
        {{-- el metodo put es exclusivo de laravel (creo) pero en si html no entiende ese metodo
            por lo tanto al declarar del formulario (form) se pone el metodo post 
            pero dentro de este se escribe @method(put) para aclarar el metodo de edicion --}}
        @csrf
        @method('put')

        <label for=""> 
            Nombre: 
            <br> 
            <input type="text" name="name" value="{{$category->name}}">
            {{-- para los textbox si se usa value para rellenar el texto --}}
            
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
            <textarea name ="description", cols="30" rows = 5 >{{$category->description}}</textarea>
            {{-- para los text area solo poner texto dentro de los >< --}}
            
            @error('description')
                <br>
                    <span>  {{$message}}*   </span>
                <br>    
            @enderror
        </label>
        <br>
        <button type="submit"> Actualizar cochinada </button>
    </form> 
@endsection