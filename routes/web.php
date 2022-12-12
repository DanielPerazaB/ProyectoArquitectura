<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('alumno/{alumno}/ver', [AlumnoController::class, 'show'])->name('alumno.show');
Route::get('alumno/registrar', [AlumnoController::class, 'create'])->name('alumno.create');

Route::post('tarea/guardar',[AlumnoController::class, 'store'])->name('alumno.store');

Route::get('alumno/listar', [AlumnoController::class, 'index'])->name('alumno.index');

Route::get('alumno/{alumno}/editar', [AlumnoController::class, 'edit'])->name('alumno.edit');

Route::put('alumno/{alumno}/actualizar',[AlumnoController::class, 'update'])->name('alumno.update');

Route:: delete('alumno/{alumno}/eliminar',[AlumnoController::class, 'destroy'])->name('alumno.destroy');