<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Estudiante;
use App\Models\Curso;

class MatriculaController extends Controller
{
    // CRUDL para Matriculas

    //listado
    public function index()
    {
        $matriculas = Matricula::with('estudiante', 'curso')->get();
        return view('matriculas.index', compact('matriculas'));
    }

    // ruta para mostrar la vista y crear una matricula
    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos      = Curso::all();

        return view('matriculas.create', compact('estudiantes', 'cursos'));
    }

    // lógica para guardar nueva matricula
    public function store(Request $request)
    {

        $request->validate([
            'ID_Estudiante'       => 'required|exists:estudiantes,ID_Estudiante|unique:matriculas,ID_Estudiante',
            'ID_Curso'            => 'required|exists:cursos,ID_Curso',
            'Fecha_Matriculacion' => 'required|date',
        ]);

        Matricula::create($request->all());
        return redirect()->route('matriculas.index')->with('success', 'Matricula creada correctamente en la Base de Datos.');
    }

    // mostrar una matrícula en específico
    public function show(Matricula $matricula)
    {

        $matricula->load('estudiante', 'curso');
        return view('matriculas.show', compact('matricula'));
    }

    // ruta vista del formulario para editar una matrícula
    public function edit(Matricula $matricula)
    {

        $estudiantes = Estudiante::all();
        $cursos      = Curso::all();

        return view('matriculas.edit', compact('matricula', 'estudiantes', 'cursos'));
    }

    // lógica para actualizar una matrívula
    public function update(Request $request, Matricula $matricula)
    {

        $request->validate([
            'ID_Estudiante'       => 'required|exists:estudiantes,ID_Estudiante|unique:matriculas,ID_Estudiante,' . $matricula->ID_Matricula . ',ID_Matricula',
            'ID_Curso'            => 'required|exists:cursos,ID_Curso',
            'Fecha_Matriculacion' => 'required|date',
        ]);

        $matricula->update($request->all());
        return redirect()->route('matriculas.index')->with('success', 'Matrícula actualizada correctamente.');
    }

    public function destroy(Matricula $matricula)
    {
        $matricula->delete();

        return redirect()->route('matriculas.index')->with('success', 'Matrícula eliminada de la Base de Datos correctamente.');
    }

    // otros datos sobre matrículas - ESTUDIANTES NO MATRICULADOS SI LOS HUBIERA Y MATRICULADOS
    public function otros()
    {
        // ESTUDIANTES NO MATRICULADOS
        $noMatriculados = Estudiante::whereDoesntHave('matricula')->get();

        // ESTUDIANTES MATRICULADOS
        $matriculados = Estudiante::whereHas('matricula')->with('matricula')->get();

        return view('matriculas.otros', compact('noMatriculados', 'matriculados'));
    }

    //listado de matriculas en home-matriculas
    public function listado()
    {

        $matriculas = Matricula::all();

        return view('matriculas', compact('matriculas'));
    }
}
