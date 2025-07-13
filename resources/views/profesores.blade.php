<!-- HEREDAMOS DE LA PLANTILLA BASE EN VIEWS/LAYOUTS/ -->
@extends('layouts.main')

<!-- INSERTAMOS CONTENIDO EN EL TITLE -->
@section('title', 'Página Profesores') 

<!-- INSERTAMOS CONTENIDO EN EL CONTENT (CORRESPONDIENTE AL BODY) -->
@section('content') 
    
@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Sección Profesores</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Bienvenid@: {{ Auth::user()->name  }} </li>
              </ol>
              
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-primary text-white mb-4">
                          <div class="card-body">Datos Profesores</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('profesores.index') }}">Datos Profesores</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-warning text-white mb-4">
                          <div class="card-body">Alta nuevo profesor</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('profesores.create') }}">Crear datos profesor</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Otros datos de los Profesores</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('profesores.otros') }}">Otros datos</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Listado de profesores.
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Profesor</th>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesores as $profesor)
                        <tr>
                            <td>{{ $profesor->ID_Profesor }}</td>
                            <td>{{ $profesor->Nombre }}</td>
                            <td>{{ $profesor->Especialidad }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Profesor</th>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>    
      </main>

