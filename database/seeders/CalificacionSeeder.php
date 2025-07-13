<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calificacion;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ID_Estudiante + ID_Curso (actual) + Nota final del curso (del 0 al 100)
        Calificacion::create([
            "ID_Estudiante" => 1,
            "ID_Curso"      => 2,
            "Nota"          => 100
        ]);

        Calificacion::create([
            "ID_Estudiante" => 2,
            "ID_Curso"      => 2, // DAW2
            "Nota"          => 100
        ]);

        Calificacion::create([
            "ID_Estudiante" => 3,
            "ID_Curso"      => 4, // ASIR2
            "Nota"          => 85
        ]);

        Calificacion::create([
            "ID_Estudiante" => 4,
            "ID_Curso"      => 2,
            "Nota"          => 92
        ]);

        Calificacion::create([
            "ID_Estudiante" => 5,
            "ID_Curso"      => 2,
            "Nota"          => 78
        ]);

        Calificacion::create([
            "ID_Estudiante" => 6,
            "ID_Curso"      => 2, // DAW2
            "Nota"          => 88
        ]);

        Calificacion::create([
            "ID_Estudiante" => 7,
            "ID_Curso"      => 5, // ESO4
            "Nota"          => 90
        ]);

        Calificacion::create([
            "ID_Estudiante" => 8, // Eric Satiè
            "ID_Curso"      => 7,
            "Nota"          => 95
        ]);

        Calificacion::create([
            "ID_Estudiante" => 9,
            "ID_Curso"      => 6, // Bachiller 1
            "Nota"          => 82
        ]);

        Calificacion::create([
            "ID_Estudiante" => 10,
            "ID_Curso"      => 3, // ASIR1
            "Nota"          => 87
        ]);

        Calificacion::create([
            "ID_Estudiante" => 11, // Fernando Católico
            "ID_Curso"      => 7,
            "Nota"          => 91
        ]);

        Calificacion::create([
            "ID_Estudiante" => 12,
            "ID_Curso"      => 3,
            "Nota"          => 76
        ]);

        Calificacion::create([
            "ID_Estudiante" => 13, // Vinicius Junior
            "ID_Curso"      => 5,
            "Nota"          => 89
        ]);

        Calificacion::create([
            "ID_Estudiante" => 14,
            "ID_Curso"      => 5,
            "Nota"          => 84
        ]);

        Calificacion::create([
            "ID_Estudiante" => 15,
            "ID_Curso"      => 6, // Bachiller1
            "Nota"          => 93
        ]);

        Calificacion::create([
            "ID_Estudiante" => 16, // Lucca Sierra
            "ID_Curso"      => 1,
            "Nota"          => 80
        ]);

        Calificacion::create([
            "ID_Estudiante" => 17,
            "ID_Curso"      => 1,
            "Nota"          => 86
        ]);

        Calificacion::create([
            "ID_Estudiante" => 18, // Melodi Pérez
            "ID_Curso"      => 5,
            "Nota"          => 88
        ]);

        Calificacion::create([
            "ID_Estudiante" => 19,
            "ID_Curso"      => 7, // Bachiller 2
            "Nota"          => 90
        ]);

        Calificacion::create([
            "ID_Estudiante" => 20, // Carlos Pérez
            "ID_Curso"      => 5,
            "Nota"          => 85
        ]);

        Calificacion::create([
            "ID_Estudiante" => 21,
            "ID_Curso"      => 2,
            "Nota"          => 79
        ]);

        Calificacion::create([
            "ID_Estudiante" => 22,
            "ID_Curso"      => 3,
            "Nota"          => 83
        ]);

        Calificacion::create([
            "ID_Estudiante" => 23, // Luis Garcia
            "ID_Curso"      => 1,
            "Nota"          => 91
        ]);

        Calificacion::create([
            "ID_Estudiante" => 24,
            "ID_Curso"      => 3,
            "Nota"          => 77
        ]);

        Calificacion::create([
            "ID_Estudiante" => 25,
            "ID_Curso"      => 5,
            "Nota"          => 86
        ]);
    }
}
