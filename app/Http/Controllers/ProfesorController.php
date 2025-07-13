<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    // Controlador para CRUDL de la tabla Profesores

    // Listado de todos los profesores
    public function index()
    {
        $profesores = Profesor::with('cursos')->get();

        return view('profesores.index', compact('profesores'));
    }

    // ruta para crear un nuevo profesor
    public function create()
    {

        return view('profesores.create');
    }

    public function store(Request $request)
    {

        $request->validate([

            'Nombre'       => 'required|string|max:100',
            'Especialidad' => 'required|string|max:100',

        ]);

        Profesor::create($request->all());

        return redirect()->route('profesores.index')->with('success', 'Nuevo profesor creado en la Base de Datos.');
    }

    // mostrar un único profesor en particular
    public function show(Profesor $profesor)
    {
        $profesor->load('cursos');

        return view('profesores.show', compact('profesor'));
    }

    //  ******** ruta para editar datos de un profesor + Lógica para editar/actualizar datos de un profesor **********
    public function edit(Profesor $profesor)
    {

        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor)
    {

        $request->validate([
            'Nombre'       => 'required|string|max:100',
            'Especialidad' => 'required|string|max:100',
        ]);

        $profesor->update($request->all());

        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado en la Base de Datos');
    }
    // ********** fin de ruta para editar datos de un profesor + Lógica para editar/actualizar datos de un profesor **********

    // borrar un profesor de la base de datos
    public function destroy(Profesor $profesor)
    {

        $profesor->delete();

        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado de la Base de Datos');
    }

    // sección otros, los profesores que tienen asignados cursos y los que no
    public function otros()
    {
        // PROFESORES SIN CURSOS
        $profesoresSin = Profesor::whereDoesntHave('cursos')->get();

        // PROFESORES CON CURSOS 
        $profesoresCon = Profesor::whereHas('cursos')->with('cursos')->get();

        return view('profesores.otros', compact('profesoresSin', 'profesoresCon'));
    }

    // ruta al listado en el dashboard
    public function listado()
    {
        $profesores = Profesor::all();

        return view('profesores', compact('profesores'));
    }
}
