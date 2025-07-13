@extends('layouts.main')

@section('title', 'Estudiantes sin Calificaciones')

@component('components.navegador')
@endcomponent

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Estudiantes sin Calificaciones</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/calificaciones-home">InstApp</a></li>
                <li class="breadcrumb-item active">Otros datos de los Estudiantes</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabla de estudiantes que no tienen ninguna calificación asignada.
                </div>
                <div class="card-body">
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
                            @foreach($estudiantesSinCalificaciones as $estudiante)
                                <tr>
                                    <td>{{ $estudiante->ID_Estudiante }}</td>
                                    <td>{{ $estudiante->Nombre }}</td>
                                    <td>{{ $estudiante->Fecha_Nacimiento }}</td>
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
            </div>
        </div>
    </main>

