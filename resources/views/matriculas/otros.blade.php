@extends('layouts.main')

@section('title', 'Matrículas y Estudiantes')

@section('content')

@component('components.navegador')
@endcomponent

  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Estudiantes sin Matrícula</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item"><a href="home-matriculas">InstApp</a></li>
                  <li class="breadcrumb-item active">Otros datos de las matrículas</li>
              </ol>
              <div class="card mb-4">
              </div>
              <div class="card mb-4">
                  <div class="card-header">
                      <i class="fas fa-table me-1"></i>
                      Estudiantes sin matricular.
                  </div>
                  <div class="card-body">
                      <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($noMatriculados as $estudiante)
                    <tr>
                        <td>{{ $estudiante->Nombre }}</td>
                        <td>{{ $estudiante->Fecha_Nacimiento }}</td>
                        <td>{{ $estudiante->Direccion }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">¡Todos los estudiantes están matriculados!</td>
                    </tr>
                    @endforelse
                </tbody>
                    <tfoot>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Dirección</th>
                    </tfoot>
            </table>
                  </div>
              </div>
          </div>
                      {{-- Tabla de Estudiantes SÍ Matriculados --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user-check me-1"></i>
                    Estudiantes con matrícula
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha Nacimiento</th>
                                <th>Dirección</th>
                                <th>Curso</th>
                                <th>Fecha de Matrícula</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($matriculados as $estudiante)
                                <tr>
                                    <td>{{ $estudiante->Nombre }}</td>
                                    <td>{{ $estudiante->Fecha_Nacimiento }}</td>
                                    <td>{{ $estudiante->Direccion }}</td>
                                    <td>{{ $estudiante->matricula->curso->Nombre ?? 'Curso no disponible' }}</td>
                                    <td>{{ $estudiante->matricula->Fecha_Matriculacion }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No hay estudiantes matriculados.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha Nacimiento</th>
                                <th>Dirección</th>
                                <th>Curso</th>
                                <th>Fecha de Matrícula</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
    </main>




