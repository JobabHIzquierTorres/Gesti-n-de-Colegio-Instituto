@extends('layouts.main')

@section('title', 'Nueva Asignación')

@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Asignar Curso a Profesor</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('cursos_profesores.store') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <select name="ID_Curso" class="form-control" required>
                                            <option value="">-- Selecciona un Curso --</option>
                                            @foreach($cursos as $curso)
                                                <option value="{{ $curso->ID_Curso }}">{{ $curso->Nombre }}</option>
                                            @endforeach
                                        </select>
                                        <label for="ID_Curso" style="color: #050505;">Curso</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name="ID_Profesor" class="form-control" required>
                                            <option value="">-- Selecciona un Profesor --</option>
                                            @foreach($profesores as $profesor)
                                                <option value="{{ $profesor->ID_Profesor }}">{{ $profesor->Nombre }}</option>
                                            @endforeach
                                        </select>
                                        <label for="ID_Profesor" style="color: #050505;">Profesor</label>
                                    </div>

                                    {{-- Botones --}}
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a href="{{ route('cursos_profesores.index') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Asignar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <small class="text-muted">Asignación de cursos a profesores</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
