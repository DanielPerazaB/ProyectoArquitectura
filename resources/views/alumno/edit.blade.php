@extends('tema.app')

@section('title',"Editar Alumno")

@section('contenido')
<h3>
    Editando alumno <i>{{ $alumno->matricula }}</i>
</h3>
<form action="{{ route('alumno.update',$alumno) }}" method="POST">
    @method('put')
   <x-alumno-form-body :alumno="$alumno"/>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
