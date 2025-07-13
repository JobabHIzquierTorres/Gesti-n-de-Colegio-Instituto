@extends('layouts.main')

@section('title', 'Listado de Profesores')

@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Tabla con los Profesores</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="{{ route('home-profesores') }}">InstApp</a></li>
              <li class="breadcrumb-item active">Listado de Profesores</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabla con los profesores en el instituto.
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>ID Profesor</th>
                      <th>Nombre</th>
                      <th>Especialidad</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($profesores as $profesor)
                    <tr>
                      <td>{{ $profesor->ID_Profesor }}</td>
                      <td>{{ $profesor->Nombre }}</td>
                      <td>{{ $profesor->Especialidad }}</td>
                      <td> 
                        <a href="{{ route('profesores.edit' , $profesor->ID_Profesor) }}"
                          class="btn btn-primary btn-sm">
                          <i class="fas fa-edit"></i> Modificar
                        </a>
                      </td>
                      <td>
                        <!-- Formulario de eliminación -->
                        <form action="{{ route('profesores.destroy', $profesor->ID_Profesor) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a este profesor?')">
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
                      <th>ID Profesor</th>
                      <th>Nombre</th>
                      <th>Especialidad</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </main>
            