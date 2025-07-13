<!-- HEREDAMOS DE LA PLANTILLA BASE EN VIEWS/LAYOUTS/ -->
@extends('layouts.main')

<!-- INSERTAMOS CONTENIDO EN EL TITLE -->
@section('title', 'Página principal') 

<!-- INSERTAMOS CONTENIDO EN EL CONTENT (CORRESPONDIENTE AL BODY) -->
@section('content') 
    
@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Sección Matrículas</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Bienvenid@: {{ Auth::user()->name  }} </li>
              </ol>
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-primary text-white mb-4">
                          <div class="card-body">Datos Matrículas</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('matriculas.index') }}">Datos Matrículas</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-warning text-white mb-4">
                          <div class="card-body">Matricular Estudiante</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('matriculas.create') }}">Crear Matrícula</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Otros datos de las Matrículas</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('matriculas.otros') }}">Otros datos</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Listado de estudiantes y sus matrículas.
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Matrícula</th>
                            <th>ID Estudiante</th>
                            <th>Fecha de Matriculación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matriculas as $matricula)
                        <tr>
                            <td>{{ $matricula->ID_Matricula }}</td>
                            <td>{{ $matricula->ID_Estudiante }}</td>
                            <td>{{ \Carbon\Carbon::parse($matricula->Fecha_Matriculacion)->format('d/m/Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Matrícula</th>
                            <th>ID Estudiante</th>
                            <th>Fecha de Matriculación</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>    
      </main>

