<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Curso::create([

            "Nombre"       => "DAW1",
            "Descripcion" => "Desarrollo de Aplicaciones Web primer curso",
        ]);

        Curso::create([

            "Nombre"       => "DAW2",
            "Descripcion" => "Desarrollo de Aplicaciones Web segundo curso",
        ]);

        Curso::create([

            "Nombre"       => "ASIR1",
            "Descripcion" => "Administración de Sistemas Informáticos primer curso",
        ]);

        Curso::create([

            "Nombre"       => "ASIR2",
            "Descripcion" => "Administración de Sistemas Informáticos primer curso",
        ]);

        Curso::create([

            "Nombre"       => "ESO4",
            "Descripcion" => "Cuarto de la ESO",
        ]);

        Curso::create([

            "Nombre"       => "Bachiller1",
            "Descripcion" => "Primero de Bachiller",
        ]);

        Curso::create([

            "Nombre"       => "Bachiller2",
            "Descripcion" => "Segundo de Bachiller",
        ]);
    }
}
