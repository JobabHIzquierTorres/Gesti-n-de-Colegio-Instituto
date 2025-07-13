@extends('layouts.main')

@section('title', 'Asignaciones Cursos-Profesores')

@component('components.navegador')
@endcomponent

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabla de Asignaciones</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/cursos-profesores">InstApp</a></li>
                <li class="breadcrumb-item active">Asignaciones Cursos/Profesores</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Relación de Cursos con sus Profesores Asignados
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Profesor</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cp as $asignacion)
                            <tr>
                                <td>{{ $asignacion->Curso }}</td>
                                <td>{{ $asignacion->Profesor }}</td>
                                <td>
                                    <form action="{{ route('cursos_profesores.destroy') }}" method="POST" 
                                          onsubmit="return confirm('¿Eliminar esta asignación?')">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="ID_Curso" value="{{ $asignacion->ID_Curso }}">
                                        <input type="hidden" name="ID_Profesor" value="{{ $asignacion->ID_Profesor }}">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Curso</th>
                                <th>Profesor</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
