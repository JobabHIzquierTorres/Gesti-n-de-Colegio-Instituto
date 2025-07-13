@extends('layouts.main')
@section('title', 'Modificar Matrícula')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Modificar Matrícula</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('matriculas.update', $matricula->ID_Matricula) }}">
                                    @csrf
                                    @method('PUT')
                                    
                                    <!-- Selección de Estudiante -->
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="ID_Estudiante" name="ID_Estudiante" required>
                                            <option value="">Seleccione un estudiante</option>
                                            @foreach($estudiantes as $estudiante)
                                                <option value="{{ $estudiante->ID_Estudiante }}" 
                                                    {{ $matricula->ID_Estudiante == $estudiante->ID_Estudiante ? 'selected' : '' }}>
                                                    {{ $estudiante->Nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="ID_Estudiante">Estudiante</label>
                                    </div>

                                    <!-- Selección de Curso -->
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="ID_Curso" name="ID_Curso" required>
                                            <option value="">Seleccione un curso</option>
                                            @foreach($cursos as $curso)
                                                <option value="{{ $curso->ID_Curso }}" 
                                                    {{ $matricula->ID_Curso == $curso->ID_Curso ? 'selected' : '' }}>
                                                    {{ $curso->Nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="ID_Curso">Curso</label>
                                    </div>

                                    <!-- Fecha de Matriculación -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="Fecha_Matriculacion" 
                                               name="Fecha_Matriculacion" type="date" 
                                               value="{{ $matricula->Fecha_Matriculacion }}" 
                                               required/>
                                        <label for="Fecha_Matriculacion">Fecha de Matriculación</label>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a href="{{ route('home-matriculas') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Actualizar Matrícula</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection