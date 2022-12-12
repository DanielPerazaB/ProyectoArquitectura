@extends('tema.app')

@section('title',"Listado Alumnos")

@section('contenido')
<h3>
  Listado de los alumnos registrados
</h3>
<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th>
                Matrícula
            </th>
            <th>
                Nombre Completo
            </th>
            <th>
                Correo electrónico
            </th>
            <th>
                Teléfono
            </th>
            <th>
                Edad
            </th>
            <th>
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
      
        @foreach ($alumnos as $alumno)
            <tr>
                <td>
                    {{ $alumno->matricula }}
                </td>
                <td>
                    {{ $alumno->nombreCompleto }}
                </td>
                <td>
                    {{ $alumno->correoElectronico }}
                </td>
                <td>
                    {{ $alumno->numeroTelefonico }}
                </td>
                <td>
                    {{ $alumno->edad }}
                </td>
                <td>
                   <a href="{{ route('alumno.edit',$alumno) }}">Editar</a>
                   <a href="{{ route('alumno.show',$alumno) }}">Ver</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
