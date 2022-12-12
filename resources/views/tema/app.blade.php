<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Informacion Alumnos(Main)
                </h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('alumno.create') }}" class="btn btn-link">Registrar Nuevo Alumno</a>
                <a href="{{ route('alumno.index') }}" class="btn btn-link">Mostrar Alumnos Registrados</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>