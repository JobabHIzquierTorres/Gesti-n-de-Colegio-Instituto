<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Matricula;

class EstudianteController extends Controller
{
    // Listar todos los alumnos
    public function index()
    {

        $estudiantes = Estudiante::all();

        return view('estudiantes.index', compact('estudiantes'));
    }

    // Ruta para crear nuevo estudiante.
    public function create()
    {

        return view('estudiantes.create');
    }

    // Guardar un nuevo estudiante
    public function store(Request $request)
    {

        $request->validate([
            'Nombre'           => 'required|string|max:100',
            'Fecha_Nacimiento' => 'required|date',
            'Direccion'        => 'required|string|max:100',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index');
    }

    // Ruta para mostrar datos de un solo alumno en particular.
    public function show(Estudiante $estudiante)
    {

        return view('estudiantes.show', compact('estudiante'));
    }

    // Ruta para editar datos de un estudiante
    public function edit(Estudiante $estudiante)
    {

        return view('estudiantes.edit', compact('estudiante'));
    }

    // Actualizar un estudiante
    public function update(Request $request, Estudiante $estudiante)
    {

        $request->validate([
            'Nombre'           => 'required|string|max:100',
            'Fecha_Nacimiento' => 'required|date',
            'Direccion'        => 'required|string|max:100',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index');
    }

    //Eliminar un estudiante
    public function destroy(Estudiante $estudiante)
    {

        $estudiante->delete();

        return redirect()->route('estudiantes.index');
    }

    //los guest (se asumen alumnos) podran ver el listado de alumnos por curso
    public function alumnosPorCurso()
    {
        $cursos = Curso::with(['matriculas.estudiante'])->get();
        return view('alumnos-por-curso', compact('cursos'));
    }

    // otros datos del alumno (Profesores por estudiante)
    public function otros()
    {
        $matriculas = Matricula::with(['estudiante', 'curso.profesores'])->get();
        return view('estudiantes.otros', compact('matriculas'));
    }

    //listado de alumnos en home
    public function listado()
    {

        $estudiantes = Estudiante::all();

        return view('home', compact('estudiantes'));
    }
}
