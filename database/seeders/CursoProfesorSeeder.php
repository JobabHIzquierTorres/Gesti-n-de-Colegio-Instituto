<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DAW2 (ID_Curso = 2) - Profesores: José Manuel Rubira Miranda, Manuel Esteso, Miguel Pagán, Rodrigo Martínez
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 2, 'ID_Profesor' => 1], // José Manuel Rubira Miranda (DWES)
            ['ID_Curso' => 2, 'ID_Profesor' => 2], // Miguel Manuel Pagán (DWEC y DIW)
            ['ID_Curso' => 2, 'ID_Profesor' => 3], // Rodrigo Martínez (LMSGI)
            ['ID_Curso' => 2, 'ID_Profesor' => 4], // Manuel Esteso (DAW)
        ]);

        // DAW1 (ID_Curso = 1)
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 1, 'ID_Profesor' => 5],
            ['ID_Curso' => 1, 'ID_Profesor' => 6],
            ['ID_Curso' => 1, 'ID_Profesor' => 7],
            ['ID_Curso' => 1, 'ID_Profesor' => 8],
        ]);

        // ASIR1 (ID_Curso = 3)
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 3, 'ID_Profesor' => 6],
            ['ID_Curso' => 3, 'ID_Profesor' => 7],
            ['ID_Curso' => 3, 'ID_Profesor' => 8],
        ]);

        // ASIR2 (ID_Curso = 4)
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 4, 'ID_Profesor' => 6],
            ['ID_Curso' => 4, 'ID_Profesor' => 7],
            ['ID_Curso' => 4, 'ID_Profesor' => 8],
        ]);

        // ESO4 (ID_Curso = 5)
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 5, 'ID_Profesor' => 8],
            ['ID_Curso' => 5, 'ID_Profesor' => 9],
            ['ID_Curso' => 5, 'ID_Profesor' => 11],
            ['ID_Curso' => 5, 'ID_Profesor' => 12],
            ['ID_Curso' => 5, 'ID_Profesor' => 14],
            ['ID_Curso' => 5, 'ID_Profesor' => 15],
        ]);

        // Bachiller1 (ID_Curso = 6)
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 6, 'ID_Profesor' => 8],
            ['ID_Curso' => 6, 'ID_Profesor' => 9],
            ['ID_Curso' => 6, 'ID_Profesor' => 11],
            ['ID_Curso' => 6, 'ID_Profesor' => 12],
            ['ID_Curso' => 6, 'ID_Profesor' => 14],
            ['ID_Curso' => 6, 'ID_Profesor' => 15],
        ]);

        // Bachiller2 (ID_Curso = 7)
        DB::table('cursos_profesores')->insert([
            ['ID_Curso' => 7, 'ID_Profesor' => 8],
            ['ID_Curso' => 7, 'ID_Profesor' => 9],
            ['ID_Curso' => 7, 'ID_Profesor' => 11],
            ['ID_Curso' => 7, 'ID_Profesor' => 12],
            ['ID_Curso' => 7, 'ID_Profesor' => 14],
            ['ID_Curso' => 7, 'ID_Profesor' => 15],
        ]);
    }
}
