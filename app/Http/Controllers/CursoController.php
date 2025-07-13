<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //Controlador para la tabla Cursos

    // listado de cursos
    public function index()
    {

        $cursos = Curso::with('profesores')->get();
        return view('cursos.index', compact('cursos'));
    }

    // ruta para crear un nuevo curso
    public function create()
    {

        return view('cursos.create');
    }

    //  lógica para crear un nuevo profesor
    public function store(Request $request)
    {

        $request->validate([
            'Nombre'      => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100',
        ]);

        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Seha creado un nuevo curso en la Base de Datos.');
    }

    // Mostrar un único curso
    public function show(Curso $curso)
    {

        $curso->load('profesores');
        return view('cursos.show', compact('curso'));
    }

    // ruta para editar un curso
    public function edit(Curso $curso)
    {

        return view('cursos.edit', compact('curso'));
    }

    //lógica para editar un curso
    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'Nombre'      => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100',
        ]);

        $curso->update($request->all());
        return redirect()->route('cursos.index')->with('success', 'Datos del curso modificados correctamente');
    }

    // Eliminar un curso de la base de datos
    public function destroy(Curso $curso)
    {

        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado de la Base de Datos');
    }

    // listado de los cursos que se imparten en el instituto home-cursos
    public function listado()
    {

        $cursos = Curso::all();

        return view('cursos', compact('cursos'));
    }

    // otros cursos
    public function otros()
    {
        // Cursos sin profesores
        $cursosSin = Curso::whereDoesntHave('profesores')->get();

        // Cursos con profesores 
        $cursosCon = Curso::whereHas('profesores')->with('profesores')->get();

        return view('cursos.otros', compact('cursosSin', 'cursosCon'));
    }
}
