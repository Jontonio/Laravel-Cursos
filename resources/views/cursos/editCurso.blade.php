@extends('layouts.plantilla')

{{-- @section('titulo','create - view') --}}

@section('titulo')
    Edit curso - view
@endsection

@section('contenido')
    <div>
        <h1>Editar curso </h1>
    </div>
    <form action="{{route('cursos.update',$curso->id)}}" method="post">
        {{--        Directiva para enviar de forma segura los datos--}}
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{$curso->name}}">
            <br>
            @error('name')
                <small style="color:red">*{{$message}}</small>
                <br>
                <br>
            @enderror
        </label>
        <br>
        <label>
            Descripcion:
            <textarea type="description" name="description">{{$curso->description}}</textarea>
            <br>
            @error('description')
                <small style="color:red">*{{$message}}</small>
                <br>
                <br>
            @enderror
        </label>
        <br>
        <label>
            categoria:
            <input type="text" name="category" value="{{$curso->category}}">
            <br>
            @error('category')
                <small style="color:red">*{{$message}}</small>
                <br>
                <br>
            @enderror
        </label>
        <br>
        <br>
        <button type="submit">Guardar cambios</button>
    </form>
@endsection
