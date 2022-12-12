@extends('tema.app')

@section('title',"Registro Alumno")

@section('contenido')
<h3>
    Registrar nuevo alumno
</h3>
<form action="{{ route('alumno.store') }}" method="POST">
   <x-alumno-form-body/>
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
