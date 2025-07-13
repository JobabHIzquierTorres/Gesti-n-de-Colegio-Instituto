@extends('layouts.main')

@section('title', 'Profesores y Cursos')

@section('content')

@component('components.navegador')
@endcomponent

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Profesores sin Cursos Asignados</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">InstApp</a></li>
                <li class="breadcrumb-item active">Otros datos profesores</li>
            </ol>

            {{-- Tabla de Profesores SIN Cursos --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user-times me-1"></i>
                    Profesores sin cursos asignados
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($profesoresSin as $profesor)
                            <tr>
                                <td>{{ $profesor->Nombre }}</td>
                                <td>{{ $profesor->Especialidad }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center">¡Todos los profesores tienen cursos asignados!</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
