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
              <h1 class="mt-4">Sección Estudiantes</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Bienvenid@: {{ Auth::user()->name  }} </li>
              </ol>
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-primary text-white mb-4">
                          <div class="card-body">Datos del Estudiante</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('estudiantes.index') }}">Ir a datos del estudiante</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-warning text-white mb-4">
                          <div class="card-body">Alta de Estudiante</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('estudiantes.create') }}">Ir a alta de estudiante</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Otros datos del Estudiante</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('estudiantes.otros') }}">Otros datos</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Listado de alumnos.
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
                        @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante->ID_Estudiante }}</td>
                            <td>{{ $estudiante->Nombre }}</td>
                            <td>{{ \Carbon\Carbon::parse($estudiante->Fecha_Nacimiento)->format('d/m/Y') }}</td>
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
      </main>

