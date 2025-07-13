@extends('layouts.main')

@section('title', 'Asignación Cursos-Profesores')

@section('content')
@component('components.navegador')
@endcomponent

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Asignación de Cursos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Bienvenid@: {{ Auth::user()->name }}</li>
            </ol>
            
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Asignaciones Actuales</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('cursos_profesores.index')}}">Ver Todas</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Crear</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('cursos_profesores.create') }}">Crear Nueva Asignación</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Otros</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('cursos_profesores.otros') }}">Otros Datos.</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Relación de Profesores y sus Cursos
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Profesor</th>
                                <th>Nombre</th>
                                <th>Cursos Asignados</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $profesoresUnicos = $cp->unique('ID_Profesor');
                            @endphp
                            
                            @foreach($profesoresUnicos as $profesor)
                            <tr>
                                <td>{{ $profesor->ID_Profesor }}</td>
                                <td>{{ $profesor->Profesor }}</td>
                                <td>
                                    @foreach($cp->where('ID_Profesor', $profesor->ID_Profesor) as $asignacion)
                                        {{ $asignacion->Curso }}
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID Profesor</th>
                                <th>Nombre</th>
                                <th>Cursos Asignados</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection