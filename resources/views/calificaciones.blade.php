<!-- HEREDAMOS DE LA PLANTILLA BASE EN VIEWS/LAYOUTS/ -->
@extends('layouts.main')

<!-- INSERTAMOS CONTENIDO EN EL TITLE -->
@section('title', 'Página Calificaciones') 

<!-- INSERTAMOS CONTENIDO EN EL CONTENT (CORRESPONDIENTE AL BODY) -->
@section('content') 
    
@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Sección Calificaciones</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Bienvenid@: {{ Auth::user()->name  }} </li>
              </ol>
              
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-primary text-white mb-4">
                          <div class="card-body">Datos Calificaciones</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('calificaciones.index') }}">Ver Calificaciones</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-warning text-white mb-4">
                          <div class="card-body">Registrar Calificación</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('calificaciones.create') }}">Nueva Calificación</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Otros datos de Las Calificaciones</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('calificaciones.otros') }}">Otros datos</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Listado de Calificaciones
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Curso</th>
                            <th>Calificación (0-10)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($calificaciones as $calificacion)
                        <tr>
                            <td>{{ $calificacion->estudiante->Nombre }}</td>
                            <td>{{ $calificacion->curso->Nombre }}</td>
                            <td class="{{ $calificacion->Nota }}">
                                {{ number_format($calificacion->Nota / 10, 1) }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Estudiante</th>
                            <th>Curso</th>
                            <th>Calificación</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>    
      </main>
@endsection