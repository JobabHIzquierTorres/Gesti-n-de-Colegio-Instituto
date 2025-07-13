<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificacion;
use App\Models\Estudiante;
use App\Models\Curso;

class CalificacionController extends Controller
{
    //Controlador para la tabla Calificaciones.

    //Listado de calificaciones
    public function index()
    {

        $calificaciones = Calificacion::with('estudiante', 'curso')->get();

        return view('calificaciones.index', compact('calificaciones'));
    }

    // ruta a la vista para crear una nueva calificación
    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('calificaciones.create', compact('estudiantes', 'cursos'));
    }

    // lógica para guardar una nueva calificación
    public function store(Request $request)
    {
        $request->validate([
            'ID_Estudiante' => 'required|exists:estudiantes,ID_Estudiante|unique:calificaciones,ID_Estudiante',
            'ID_Curso' => 'required|exists:cursos,ID_Curso',
            'Nota' => 'required|integer|between:0,100',
        ]);

        Calificacion::create($request->all());
        return redirect()->route('calificaciones.index')->with('success', 'Calificación creada con éxito.');
    }

    // Mostrar una calificación específica
    public function show(Calificacion $calificacion)
    {
        $calificacion->load('estudiante', 'curso');
        return view('calificaciones.show', compact('calificacion'));
    }

    // ruta al la vista del formulario para editar una calificación
    public function edit(Calificacion $calificacion)
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('calificaciones.edit', compact('calificacion', 'estudiantes', 'cursos'));
    }

    // lógica para actualizar una calificación
    public function update(Request $request, Calificacion $calificacion)
    {
        $request->validate([
            'ID_Estudiante' => 'required|exists:estudiantes,ID_Estudiante|unique:calificaciones,ID_Estudiante,' . $calificacion->ID_Calificacion . ',ID_Calificacion',
            'ID_Curso' => 'required|exists:cursos,ID_Curso',
            'Nota' => 'required|integer|between:0,100',
        ]);

        $calificacion->update($request->all());
        return redirect()->route('calificaciones.index')->with('success', 'Calificación actualizada con éxito.');
    }

    // Eliminar una calificación
    public function destroy(Calificacion $calificacion)
    {
        $calificacion->delete();
        return redirect()->route('calificaciones.index')->with('success', 'Calificación eliminada con éxito.');
    }

    // sección otros, calificaciones  sin calificaciones
    public function otros()
    {
        // Estudiantes que NO tienen calificaciones
        $estudiantesSinCalificaciones = Estudiante::doesntHave('calificacion')->get();

        return view('calificaciones.otros', compact('estudiantesSinCalificaciones'));
    }

    // ruta al listado en el dashboard
    public function listado()
    {
        $calificaciones = Calificacion::all();

        return view('calificaciones', compact('calificaciones'));
    }
}
