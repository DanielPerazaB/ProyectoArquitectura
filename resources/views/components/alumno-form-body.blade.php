@csrf
<div class="row">
    <div class="col-sm-4">
        <label for="InputMatricula" class="form label">Matrícula</label>
        <input type="text" name="matricula" id="InputMatricula" class="form-control" placeholder="Matricula alumno" value="{{ old('matricula', $alumno->matricula) }}">
    </div>

    <div class="col-sm-8">
        <label for="InputNombreCompleto" class="form label">Nombre Completo</label>
        <input type="text" name="nombreCompleto" id="InputNombreCompleto" class="form-control" placeholder="Nombre alumno" value="{{ old('nombreCompleto', $alumno->nombreCompleto) }}">
    </div>

</div>
<div class="row">
    <div class="col-sm-4">
        <label for="InputCorreoElectronico" class="form label">Correo Electrónico</label>
        <input type="text" name="correoElectronico" id="InputCorreoElectronico" class="form-control" placeholder="Correo" value="{{ old('correoElectronico', $alumno->correoElectronico) }}">
    </div>

    <div class="col-sm-4">
        <label for="InputTelefono" class="form label">Número telefónico</label>
        <input type="text" name="numeroTelefonico" id="InputTelefono" class="form-control" placeholder="Teléfono" value="{{ old('numeroTelefonico', $alumno->numeroTelefonico) }}">
    </div>

    <div class="col-sm-4">
        <label for="InputEdad" class="form label">Edad</label>
        <input type="text" name="edad" id="InputEdad" class="form-control" placeholder="Edad" value="{{ old('edad', $alumno->edad) }}">
    </div>
    <div class="col-sm-12 text-end my-2">

    </div>
    <button type="submit" class="btn btn-primary">Guardar nuevo alumno</button>
</div>