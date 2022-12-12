@extends('tema.app')

@section('title',"Información del Alumno")

@section('contenido')
<h3>
    Alumno: <i>{{ $alumno->matricula }}</i>
</h3>
<ul>
    <li>
        Nombre completo: <strong>{{ $alumno->nombreCompleto }}</strong>
    </li>
    <li>
        Correo electrónico: <strong>{{ $alumno->correoElectronico }}</strong>
    </li>
    <li>
        Número telefónico: <strong>{{ $alumno->numeroTelefonico }}</strong>
    </li>
    <li>
       Edad: <strong>{{ $alumno->edad }}</strong>
    </li>
</ul>

<div class="row">
    <div class="col-sm-12 mb-2">
        <form action="{{ route('alumno.destroy',$alumno) }}" method="POST">
        @csrf
        @method('delete')
        <button class=" btn btn-danger btn-sm" type="submit">Eliminar Alumno</button>
        </form>
    </div>
</div>

@endsection
