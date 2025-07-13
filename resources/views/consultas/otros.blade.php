@extends('layouts.main')

@section('title', 'Listado de Estudiantes')

<!-- Estudiantes sin notas -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Consultas Hardcodeadas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">InstApp</a></li>
                <li class="breadcrumb-item active">Listado de Estudiantes sin notas (calificaciones)</li>
            </ol>
            <div class="card mb-4">
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    @if(count($estudiantesSinCalificaciones) > 0) <!-- si hay registros, se muestran -->
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($estudiantesSinCalificaciones as $estudiante)
                        <tr>
                            <td>{{ $estudiante->ID_Estudiante }}</td>
                            <td>{{ $estudiante->Nombre }}</td>
                            <td>{{ \Carbon\Carbon::parse($estudiante->Fecha_Nacimiento)->format('d/m/Y') }}</td>
                            <td>{{ $estudiante->Direccion }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Dirección</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                @else
                    <div class="alert alert-info">No hay estudiantes sin calificaciones.</div>
                @endif
            </div>
        </div>
    </main>
</div>
<!-- fin de estudiantes sin otas -->

<!-- Cursos sin profesores -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">InstApp</a></li>
                <li class="breadcrumb-item active">Listado de Cursos sin profesores asignados</li>
            </ol>
            <div class="card mb-4">
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    @if(count($cursoSin) > 0) <!-- si hay registros, se muestran -->
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($cursosSinProfesores as $curso)
                        <tr>
                            <td>{{ $curso->ID_Curso }}</td>
                            <td>{{ $curso->Nombre }}</td>
                            <td>{{ $curso->Descripcion }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                @else
                    <div class="alert alert-info">No hay cursos sin profesores.</div>
                @endif
            </div>
        </div>
    </main>
</div>
<!-- fin de cursos sin profesores -->

<!-- profesores y sus alumnos con un dropdown -->

<!-- Profesores y sus alumnos en dropdown -->
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h2>Profesores y sus alumnos (con dropdown )</h2>
    </div>
    <div class="card-body">

        @if(count($profesoresConAlumnos) > 0)

            <div class="list-group">
                @foreach($profesoresConAlumnos as $profesor => $alumnos)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <strong>{{ $profesor }}</strong>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Alumnos ({{ count($alumnos) }})
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @foreach($alumnos as $alumno)
                                    <li class="dropdown-item">
                                        {{ $alumno['Alumno'] }} - {{ $alumno['Curso'] }} 
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">No hay datos de profesores con alumnos.</div>
        @endif
    </div>
</div>

<!-- fin de profesores y sus alumnos con un dropdown -->