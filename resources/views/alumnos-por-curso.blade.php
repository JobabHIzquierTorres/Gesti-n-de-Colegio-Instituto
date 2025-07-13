@extends('layouts.main')

@section('title', 'Alumnos por curso')

@component('components.navegador')
@endcomponent

  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Tabla con los datos de los Alumnos</h1>
              @component('components.alertas')
              @endcomponent
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item"><a href="/">InstApp</a></li>
                  <li class="breadcrumb-item active">Listado de Estudiantes</li>
              </ol>
              <div class="card mb-4">
              </div>
              <div class="card mb-4">
                  <div class="card-header">
                      <i class="fas fa-table me-1"></i>
                      Tabla con los datos de los estudiantes matriculados.
                  </div>
                  @foreach ($cursos as $curso)
                  <div class="mb-4">
                      <h4>{{ $curso->Nombre }} ({{ $curso->Descripcion }})</h4>
                      @if ($curso->matriculas->isEmpty())
                          <p>No hay estudiantes matriculados en este curso.</p>
                      @else
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Nombre</th>
                                      <th>Fecha de Nacimiento</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($curso->matriculas as $matricula)
                                      <tr>
                                          <td>{{ $matricula->estudiante->Nombre }}</td>
                                          <td>{{ \Carbon\Carbon::parse($matricula->estudiante->Fecha_Nacimiento)->format('d/m/Y') }}</td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      @endif
                  </div>
              @endforeach
              </div>
          </div>
      </main>
