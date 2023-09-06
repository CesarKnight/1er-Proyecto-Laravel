@extends('layouts.plantilla')
@section('title','index')

@section('content')
    <h1> aqui encontraras todas las sabrosusas posibles </h1>
    <a href={{route('categories.search')}}> buscar entre toda la basuraaa </a>
    <ul>
        @foreach ($categories as $category)
            <li> {{$category->name}} </li>
            <li> {{$category->description}} </li>
        @endforeach
    </ul>

    {{$categories->links()}}
@endsection