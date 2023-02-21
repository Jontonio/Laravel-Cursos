@extends('layouts.plantilla')

{{-- @section('titulo','create - view') --}}

@section('titulo')
    index - view
@endsection

@section('contenido')
    <div>
        <h1>Bienvenido a los cursos</h1>
        <button class="bg-sky-500 hover:bg-sky-700">
            <a href="{{route('cursos.create')}}">Crear cursos</a>
        </button>
        <ul>
            @foreach($cursos as $curso)
                <li>
                    <a href="{{route('cursos.show',$curso->slug)}}">{{$curso->name}}</a>
                </li>
            @endforeach
        </ul>
        {{$cursos->links()}}
    </div>
@endsection

