@extends('layouts.main')
@section('title', 'Nueva Calificación')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Nueva Calificación</h3>
                            </div>
                            <div class="card-body">
                                <form id="form-calificacion" method="POST" action="{{ route('calificaciones.store') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="estudiante" name="ID_Estudiante" required>
                                            <option value="">Seleccione un estudiante</option>
                                            @foreach($estudiantes as $estudiante)
                                                <option value="{{ $estudiante->ID_Estudiante }}">
                                                    {{ $estudiante->Nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="estudiante" style="color: #050505;">Estudiante</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="curso" name="ID_Curso" required>
                                            <option value="">Seleccione un curso</option>
                                            @foreach($cursos as $curso)
                                                <option value="{{ $curso->ID_Curso }}">
                                                    {{ $curso->Nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="curso" style="color: #050505;">Curso</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nota" name="Nota" 
                                               type="number" step="0.1" min="0" max="10" 
                                               placeholder="Ej: 7.5" required>
                                        <label for="nota" style="color: #050505;">Nota (0-10)</label>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a href="{{ route('calificaciones.index') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
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

{{-- Script para convertir nota 0–10 a 0–100 y poder guardarlo en la bbdd --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('form-calificacion');
        form.addEventListener('submit', function (e) {
            const notaInput = document.getElementById('nota');
            let nota = parseFloat(notaInput.value);
            if (!isNaN(nota)) {
                notaInput.value = Math.round(nota * 10); // Convertimos 7.5 → 75
            }
        });
    });
</script>
@endsection
