@extends('layouts.main')

@section('title', 'Listado de Estudiantes')

@component('components.navegador')
@endcomponent
  <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Tabla con las Matrículas</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="{{ route('home-matriculas') }}">InstApp</a></li>
              <li class="breadcrumb-item active">Listado de Matrículas</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabla con las matrículas.
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Estudiante</th>
                      <th>Curso Matriculado</th>
                      <th>Fecha de Matriculación</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($matriculas as $matricula)
                    <tr>
                      <td>{{ $matricula->ID_Matricula }}</td>
                      <td>{{ $matricula->estudiante->Nombre }}</td>
                      <td>{{ $matricula->curso->Nombre }}</td>
                      <td>{{ \Carbon\Carbon::parse($matricula->Fecha_Matriculacion)->format('d/m/Y') }}</td>
                      <td> 
                        <a href="{{ route('matriculas.edit' , $matricula->ID_Matricula) }}"
                          class="btn btn-primary btn-sm">
                          <i class="fas fa-edit"></i> Modificar
                        </a>
                      </td>
                      <td>
                        <!-- Formulario de eliminación -->
                        <form action="{{ route('matriculas.destroy', $matricula->ID_Matricula) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a esta Matrícula?')">
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
                      <th>Estudiante</th>
                      <th>Curso Matriculado</th>
                      <th>Fecha de Matriculación</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </main>
            