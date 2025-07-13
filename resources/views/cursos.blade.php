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
              <h1 class="mt-4">Sección Cursos</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Bienvenid@: {{ Auth::user()->name  }} </li>
              </ol>
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-primary text-white mb-4">
                          <div class="card-body">Datos Cursos</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('cursos.index') }}">Datos Cursos</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-warning text-white mb-4">
                          <div class="card-body">Crear nuevo Curso</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('cursos.create') }}">Nuevo Curso</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Otros datos de los Cursos</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="{{ route('cursos.otros') }}">Otros datos</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Listado de Cursos.
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Curso</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->ID_Curso }}</td>
                            <td>{{ $curso->Nombre }}</td>
                            <td>{{ $curso->Descripcion }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Curso</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>    
      </main>

