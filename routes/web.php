<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\CursoProfesorController;
use App\Http\Controllers\ConsultasController;
use App\Models\Calificacion;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Event\ViewEvent;

// Incluir las rutas de autenticación de Laravel Breeze
require __DIR__ . '/auth.php';

// Ruta pública para listar alumnos por curso (accesible para alumnos y profesores)
Route::get('/alumnos-por-curso', [EstudianteController::class, 'alumnosPorCurso'])->middleware('auth')->name('alumnos-por-curso');

// Ruta principal: redirige según el estado de autenticación y rol
Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->isProfessor()) {
            return redirect()->route('home');
        }
        return redirect()->route('alumnos-por-curso');
    }
    return redirect()->route('login');
})->name('home-rute');


Route::get('/home', [EstudianteController::class, 'listado'])->middleware(['auth', 'professor'])->name('home');
Route::get('/otros', [EstudianteController::class, 'otros'])->middleware(['auth', 'professor'])->name('estudiantes.otros');

Route::get('/home-profesores', [ProfesorController::class, 'listado'])->middleware(['auth', 'professor'])->name('home-profesores');
Route::get('/profesores-otros', [ProfesorController::class, 'otros'])->middleware(['auth', 'professor'])->name('profesores.otros');

Route::get('/home-cursos', [CursoController::class, 'listado'])->middleware(['auth', 'professor'])->name('home-cursos');
Route::get('/cursos-otros', [CursoController::class, 'otros'])->middleware(['auth', 'professor'])->name('cursos.otros');

Route::get('/home-matriculas', [MatriculaController::class, 'listado'])->middleware(['auth', 'professor'])->name('home-matriculas');
Route::get('/matriculas-otros', [MatriculaController::class, 'otros'])->middleware(['auth', 'professor'])->name('matriculas.otros');

Route::get('/home-calificaciones', [CalificacionController::class, 'listado'])->middleware(['auth', 'professor'])->name('home-calificaciones');
Route::get('/calificaciones-otros', [CalificacionController::class, 'otros'])->middleware(['auth', 'professor'])->name('calificaciones.otros');

Route::get('/cursos-profesores', [CursoProfesorController::class, 'listado'])->middleware(['auth', 'professor'])->name('cursos-profesores');
Route::get('/cursos_profesores_otros', [CursoProfesorController::class, 'otros'])->middleware(['auth', 'professor'])->name('cursos_profesores.otros');


// Rutas protegidas para profesores (CRUDL completo)
Route::middleware(['auth', 'professor'])->group(function () {
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('cursos', CursoController::class);
    Route::resource('profesores', ProfesorController::class)->parameters(['profesores' => 'profesor']); // evita errores con los plurales
    Route::resource('matriculas', MatriculaController::class);
    Route::resource('calificaciones', CalificacionController::class)->parameters(['calificaciones' => 'calificacion']); // evita errores con los plurales
    Route::get('cursos_profesores', [CursoProfesorController::class, 'index'])->name('cursos_profesores.index');
    Route::get('cursos_profesores/create', [CursoProfesorController::class, 'create'])->name('cursos_profesores.create');
    Route::post('cursos_profesores', [CursoProfesorController::class, 'store'])->name('cursos_profesores.store');
    Route::delete('cursos_profesores', [CursoProfesorController::class, 'destroy'])->name('cursos_profesores.destroy');

    //ruta para las consultas hardcodeadas
    Route::get('/consultas/otros', [ConsultasController::class, 'consultasOtros'])->name('consultas.otros');
});
