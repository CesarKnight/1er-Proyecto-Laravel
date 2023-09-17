@extends('layouts.plantilla')
@section('title','index')

@section('content')
    <a href="{{route('homepage')}}"> Volver a la pagina principal</a>
    <h1> aqui encontraras todas las sabrosusas posibles </h1>
    <a href={{route('categories.search')}}> buscar entre toda la basuraaa </a>
    <ul>
        @foreach ($categories as $category)
            <li> 
                <a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a> 
            </li>

        @endforeach
    </ul>

   
    {{$categories->links()}}
@endsection