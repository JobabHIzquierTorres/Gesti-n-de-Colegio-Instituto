<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Calificacion;
use App\Models\Matricula;

class ConsultasController extends Controller
{
    // Ejemplo de consultas hardcodeadas, se usarán los apartados 'otros' de los controladores existentes previamente.

    public function consultasOtros()
    {

        //consulta de estudiantes sin calificaciones
        $estudiantesSinCalificaciones = DB::select(
            "select * from estudiantes where ID_Estudiante not in (select ID_Estudiante from calificaciones)"
        );

        //consulta de cursos que no tienen asignados profesores
        $cursoSin = DB::select(
            "select * from cursos where ID_Curso not in (select ID_Curso from profesores)"
        );

        //Estudiantes y profesores
        $alumnosProfesores = DB::select(
            "SELECT 
                e.ID_Estudiante,
                e.Nombre AS Alumno,
                c.ID_Curso,
                c.Nombre AS Curso,
                p.ID_Profesor,
                p.Nombre AS Profesor,
                p.Especialidad
            FROM 
                estudiantes e
            JOIN 
                matriculas m ON e.ID_Estudiante = m.ID_Estudiante
            JOIN 
                cursos c ON m.ID_Curso = c.ID_Curso
            LEFT JOIN 
                cursos_profesores cp ON c.ID_Curso = cp.ID_Curso
            LEFT JOIN 
                profesores p ON cp.ID_Profesor = p.ID_Profesor
            ORDER BY 
                e.Nombre, p.Nombre"
        );

        // Agrupar alumnos por profesor
        $profesoresConAlumnos = [];

        foreach ($alumnosProfesores as $relacion) {
            $profesor = $relacion->Profesor ?? 'No asignado';

            // Asegurar que el profesor esté inicializado como array (no es necesario en mi caso)
            // if (!isset($profesoresConAlumnos[$profesor])) {
            //     $profesoresConAlumnos[$profesor] = [];
            // }

            // Añadir alumno a la lista de ese profesor
            $profesoresConAlumnos[$profesor][] = [
                'Alumno' => $relacion->Alumno,
                'Curso' => $relacion->Curso,
                'Especialidad' => $relacion->Especialidad ?? '-',
            ];
        }


        return view('consultas.otros', compact('estudiantesSinCalificaciones', 'cursoSin', 'alumnosProfesores', 'profesoresConAlumnos'));
    }
}
