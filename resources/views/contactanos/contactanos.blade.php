@extends('layouts.plantilla')

@section('titulo')
    Contactanos
@endsection

@section('contenido')
    <h1>
        Dejanos un mensaje
    </h1>
    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
                <p><strong style="color: #ee0b0b">{{$message}}</strong></p>
            @enderror
        </label>
        <br>
        <label>
            Correo:
            <br>
            <input type="email" name="correo" value="{{old('correo')}}">
            @error('correo')
            <p><strong style="color: #fc0303">{{$message}}</strong></p>
            @enderror
        </label>
        <br>
        <label>
            Nombre:
            <br>
            <textarea name="mensaje">{{old('mensaje')}}</textarea>
            @error('mensaje')
            <p><strong style="color: #b60808">{{$message}}</strong></p>
            @enderror
        </label>
        <br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if(session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
@endsection
