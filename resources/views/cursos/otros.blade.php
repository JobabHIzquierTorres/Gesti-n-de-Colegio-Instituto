@extends('layouts.main')

@section('title', 'Cursos y Profesores')

@section('content')

@component('components.navegador')
@endcomponent

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Cursos sin Profesores Asignados</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="home-cursos">InstApp</a></li>
                <li class="breadcrumb-item active">Gestión de Cursos</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Cursos sin profesor asignado
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre del Curso</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cursosSin as $curso)
                            <tr>
                                <td>{{ $curso->Nombre }}</td>
                                <td>{{ $curso->Descripcion }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center">¡Todos los cursos tienen profesores asignados!</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre del Curso</th>
                                <th>Descripción</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            {{-- Tabla de Cursos CON Profesores --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chalkboard-teacher me-1"></i>
                    Cursos con profesores asignados
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre del Curso</th>
                                <th>Descripción</th>
                                <th>Profesores Asignados</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cursosCon as $curso)
                            <tr>
                                <td>{{ $curso->Nombre }}</td>
                                <td>{{ $curso->Descripcion }}</td>
                                <td>
                                    @foreach($curso->profesores as $profesor)
                                        {{ $profesor->Nombre }}
                                    @endforeach
                                </td>
                                <td class="text-center">{{ $curso->profesores->count() }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No hay cursos con profesores asignados</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre del Curso</th>
                                <th>Descripción</th>
                                <th>Profesores Asignados</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection