@extends('layouts.plantilla')
@section('title','Edit a Category')

@section('content')
  <h1> Editar la categoria (ajajaj te equivocaste) </h1>
    
    <form action="{{route('categories.update')}}" method="POST">
        
        @csrf
        @method('put')

        <label for=""> 
            Nombre: 
            <br> 
            <input type="text" name="name" value="{{$category->name}}">
            {{-- para los textbox si se usa value para rellenar el texto --}}
        </label> 
        <br>  
        <label for="">
            Descripcion: 
            <br> 
            <textarea name ="description", cols="100" rows = 5 >{{$category->description}}</textarea>
            {{-- para los tet area solo poner dentro de los >< --}}
        </label>
        <br>
        <button type="submit"> Actualizar cochinada </button>
    </form> 
@endsection