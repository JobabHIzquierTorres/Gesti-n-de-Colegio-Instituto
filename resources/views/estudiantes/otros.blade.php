
@extends('layouts.main')

@section('title', 'Listado de Estudiantes')

@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Estudiantes y sus profesores</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item"><a href="/">InstApp</a></li>
                  <li class="breadcrumb-item active">Otros datos de los Estudiantes</li>
              </ol>
              <div class="card mb-4">
              </div>
              <div class="card mb-4">
                  <div class="card-header">
                      <i class="fas fa-table me-1"></i>
                      Tabla con los datos de los estudiantes.
                  </div>
                  <div class="card-body">
                      <table id="datatablesSimple">
                          <thead>
                              <tr>
                                  <th>Estudiante</th>
                                  <th>Profesores</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($matriculas as $matricula)
                              <tr>
                                <td>{{ $matricula->estudiante->Nombre }}</td>
                                  <td>
                                    @foreach($matricula->curso->profesores as $profesor)
                                      {{ $profesor->Nombre }}@if(!$loop->last), @endif
                                    @endforeach
                                  </td>
                              </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th>Estudiante</th>
                                <th>Profesores</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </main>





