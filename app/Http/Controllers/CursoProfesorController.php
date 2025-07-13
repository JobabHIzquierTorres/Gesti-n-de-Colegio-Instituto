<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Support\Facades\Log;

class CursoProfesorController extends Controller
{
    // Listar cursos y sus profesores asignados
    public function index()
    {

        $cp = DB::table('cursos_profesores as cp')
            ->join('cursos as c', 'cp.ID_Curso', '=', 'c.ID_Curso')
            ->join('profesores as p', 'cp.ID_Profesor', '=', 'p.ID_Profesor')
            ->select('cp.id', 'c.Nombre as Curso', 'p.Nombre as Profesor', 'cp.ID_Curso', 'cp.ID_Profesor')
            ->get();

        return view('cursos_profesores.index', compact('cp'));
    }

    //vista para crear una nueva asignación
    public function create()
    {

        $cursos     = Curso::all();
        $profesores = Profesor::all();

        return view('cursos_profesores.create', compact('cursos', 'profesores'));
    }

    // lógica nuevo registro en cursos_profesores
    public function store(Request $request)
    {

        // campos del formulario
        $request->validate([
            'ID_Curso'    => 'required|exists:cursos,ID_Curso',
            'ID_Profesor' => 'required|exists:profesores,ID_Profesor',
        ]);

        // Verificamos que no exista una asignación previa que de conflito
        $exists = DB::table('cursos_profesores')
            ->where('ID_Curso', $request->ID_Curso)
            ->where('ID_Profesor', $request->ID_Profesor)
            ->exists();

        if ($exists) {

            return redirect()->route('cursos_profesores.index')->with('error', 'Ya existe el curso con esos profesores.');
        }

        DB::table('cursos_profesores')->insert([

            'ID_Curso'    => $request->ID_Curso,
            'ID_Profesor' => $request->ID_Profesor,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('cursos_profesores.index')->with('success', 'Asignación creada con éxito.');
    }

    // Eliminar un curso con sus profesores
    public function destroy(Request $request)
    {
        $request->validate([
            'ID_Curso'    => 'required|exists:cursos,ID_Curso',
            'ID_Profesor' => 'required|exists:profesores,ID_Profesor',
        ]);

        DB::table('cursos_profesores')
            ->where('ID_Curso', $request->ID_Curso)
            ->where('ID_Profesor', $request->ID_Profesor)
            ->delete();

        return redirect()->route('cursos_profesores.index')->with('success', 'Asignación eliminada con éxito.');
    }

    public function listado()
    {

        $cp = DB::table('cursos_profesores')
            ->join('cursos', 'cursos_profesores.ID_Curso', '=', 'cursos.ID_Curso')->join('profesores', 'cursos_profesores.ID_Profesor', '=', 'profesores.ID_Profesor')
            ->select('cursos_profesores.*', 'cursos.Nombre as Curso', 'profesores.Nombre as Profesor')
            ->get();

        return view('cursos-profesores', compact('cp'));
    }

    public function otros()
    {
        // Profesores SIN cursos asignados
        $profesoresSin = Profesor::whereDoesntHave('cursos')->get();

        return view('cursos_profesores.otros', compact('profesoresSin'));
    }
}
