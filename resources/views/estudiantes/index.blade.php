@extends('layouts.main')

@section('title', 'Listado de Estudiantes')

@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Tabla con los datos de los Estudiantes</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item"><a href="/">InstApp</a></li>
                  <li class="breadcrumb-item active">Listado de Estudiantes</li>
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
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>Fecha de Nacimiento</th>
                                  <th>Dirección</th>
                                  <th>Modificar</th>
                                  <th>Eliminar</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                              <td>{{ $estudiante->ID_Estudiante }}</td>
                              <td>{{ $estudiante->Nombre }}</td>
                              <td>{{ \Carbon\Carbon::parse($estudiante->Fecha_Nacimiento)->format('d/m/Y') }}</td>
                              <td>{{ $estudiante->Direccion }}</td>
                              <td>
                                 <a href="{{ route('estudiantes.edit' , $estudiante->ID_Estudiante) }}"
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>Modificar
                                 </a>
                              </td>
                              <td> 
                                <!-- Formulario de eliminación -->
                                <form action="{{ route('estudiantes.destroy', $estudiante->ID_Estudiante) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a este estudiante?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </main>
