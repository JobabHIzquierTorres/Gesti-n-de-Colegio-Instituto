<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matricula;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Matricula::create([
            "ID_Estudiante" => 1,
            "ID_Curso"      => 2,
            "Fecha_Matriculacion" => "2024-06-03"
        ]);

        Matricula::create([
            "ID_Estudiante" => 2,
            "ID_Curso"      => 2, // DAW2
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 3,
            "ID_Curso"      => 4, // ASIR2
            "Fecha_Matriculacion" => "2024-09-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 4,
            "ID_Curso"      => 2,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 5,
            "ID_Curso"      => 2,
            "Fecha_Matriculacion" => "2024-03-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 6,
            "ID_Curso"      => 2, // DAW2
            "Fecha_Matriculacion" => "2024-10-10"
        ]);

        Matricula::create([
            "ID_Estudiante" => 7,
            "ID_Curso"      => 5, // ESO4
            "Fecha_Matriculacion" => "2025-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 8, // Eric Satiè
            "ID_Curso"      => 7, // Bachiller2
            "Fecha_Matriculacion" => "2024-09-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 9,
            "ID_Curso"      => 6, // Bachiller 1
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 10,
            "ID_Curso"      => 3, // ASIR1
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 11, // Fernando Católico
            "ID_Curso"      => 7,
            "Fecha_Matriculacion" => "2024-11-01"
        ]);

        Matricula::create([
            "ID_Estudiante" => 12,
            "ID_Curso"      => 3,
            "Fecha_Matriculacion" => "2024-05-03"
        ]);

        Matricula::create([
            "ID_Estudiante" => 13, // Vinicius Junior
            "ID_Curso"      => 5, // 4ESO
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 14,
            "ID_Curso"      => 5,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 15,
            "ID_Curso"      => 6, // Bachiller1
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 16, // Lucca Sierra
            "ID_Curso"      => 1,
            "Fecha_Matriculacion" => "2024-02-20" // Corregido de "2024-20-02"
        ]);

        Matricula::create([
            "ID_Estudiante" => 17,
            "ID_Curso"      => 1,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 18, // Melodi Pérez
            "ID_Curso"      => 5,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 19,
            "ID_Curso"      => 7, // Bachiller 2
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 20, // Carlos Pérez
            "ID_Curso"      => 5,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 21,
            "ID_Curso"      => 2,
            "Fecha_Matriculacion" => "2024-09-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 22,
            "ID_Curso"      => 3,
            "Fecha_Matriculacion" => "2024-06-14" // Corregido de "2024-14-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 23, // Luis Garcia
            "ID_Curso"      => 1,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);

        Matricula::create([
            "ID_Estudiante" => 24,
            "ID_Curso"      => 3,
            "Fecha_Matriculacion" => "2024-11-05"
        ]);

        Matricula::create([
            "ID_Estudiante" => 25,
            "ID_Curso"      => 5,
            "Fecha_Matriculacion" => "2024-10-06"
        ]);
    }
}
