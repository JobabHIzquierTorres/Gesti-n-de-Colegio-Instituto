@extends('layouts.main')

@section('title', 'Listado de Calificaciones')

@component('components.navegador')
@endcomponent
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabla con las Calificaciones</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/home-calificaciones">InstApp</a></li>
                <li class="breadcrumb-item active">Listado de Calificaciones</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabla con los datos de las Calificaciones
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Estudiante</th>
                                <th>Curso</th>
                                <th>Nota (0-10)</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calificaciones as $calificacion)
                            <tr>
                                <td>{{ $calificacion->ID_Calificacion }}</td>
                                <td>{{ $calificacion->estudiante->Nombre }}</td>
                                <td>{{ $calificacion->curso->Nombre }}</td>
                                <td>{{ number_format($calificacion->Nota / 10, 1) }} {{-- Convertimos a cifras de 0 a 10 para las notas --}}</td>
                                <td> 
                                    <a href="{{ route('calificaciones.edit', $calificacion->ID_Calificacion) }}" 
                                       class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Modificar
                                    </a>
                                </td>
                                <td> 
                                    <form action="{{ route('calificaciones.destroy', $calificacion->ID_Calificacion) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('¿Seguro que deseas eliminar esta calificación?')">
                                        @csrf
                                        @method('DELETE')
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
                                <th>ID</th>
                                <th>Estudiante</th>
                                <th>Curso</th>
                                <th>Nota</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
