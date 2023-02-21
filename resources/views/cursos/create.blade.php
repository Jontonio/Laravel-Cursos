@extends('layouts.plantilla')

{{-- @section('titulo','create - view') --}}

@section('titulo')
    create - view
@endsection

@section('contenido')
    <div>
        <h1>This is create view</h1>
    </div>
    <form action="{{route('cursos.store')}}" method="post">
{{--        Directiva para enviar de forma segura los datos--}}
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea type="description" name="description">{{old('description')}}</textarea>
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
            <input type="text" name="category" value="{{old('category')}}">
            <br>
            @error('category')
                <small style="color:red">*{{$message}}</small>
                <br>
                <br>
            @enderror
        </label>
        <br>
        <br>
        <button type="submit">Guardar</button>
    </form>
@endsection

