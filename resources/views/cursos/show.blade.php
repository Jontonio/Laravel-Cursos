@extends('layouts.plantilla')

{{-- @section('titulo','create - view') --}}

@section('titulo')
    show - {{$curso->name}}
@endsection

@section('contenido')
    <a href="{{route('cursos.index')}}">Regresar a los cursos</a>
    <br>
    <a href="{{route('cursos.getForUpdate',$curso->slug)}}">Editar curso</a>
    <br>

    <form action="{{route('cursos.delete',$curso->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="clicked()">Eliminar curso</button>
    </form>

    <div>
        <h1><b>Curso:</b> {{$curso->name}}</h1>
        <h1><b>Categoria:</b> {{$curso->category}}</h1>
        <h2><b>Descripción:</b> {{$curso->description}}</h2>
    </div>
@endsection

<script>
    const clicked = () =>{

        Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
</script>
