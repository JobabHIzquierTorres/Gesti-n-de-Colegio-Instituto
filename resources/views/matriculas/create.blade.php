@extends('layouts.main')
@section('title', 'Crear Matrícula')
@section('content')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Alta Estudiante</h3></div>
                            <div class="card-body">
                    <form method="POST" action="{{ route('matriculas.store') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-control" id="ID_Estudiante" name="ID_Estudiante" required>
                                <option value="" disabled selected>Selecciona un estudiante</option>
                                @foreach($estudiantes as $estudiante)
                                    <option value="{{ $estudiante->ID_Estudiante }}">{{ $estudiante->Nombre }}</option>
                                @endforeach
                            </select>
                            <label for="ID_Estudiante">Estudiante</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" id="ID_Curso" name="ID_Curso" required>
                                <option value="" disabled selected>Selecciona un curso</option>
                                @foreach($cursos as $curso)
                                    <option value="{{ $curso->ID_Curso }}">{{ $curso->Nombre }}</option>
                                @endforeach
                            </select>
                            <label for="ID_Curso">Curso</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="date" name="Fecha_Matriculacion" placeholder="Fecha de Matriculación" required>
                            <label for="Fecha_Matriculacion">Fecha de Matriculación</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('home-matriculas') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar Matrícula</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
<div id="layoutAuthentication_footer">
</div>
</div>
@endsection
