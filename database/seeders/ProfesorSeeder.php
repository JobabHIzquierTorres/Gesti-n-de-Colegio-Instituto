<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Profesor::create([

            "Nombre"       => "Jose Manuel Rubira Miranda",
            "Especialidad" => "Profesor de DWES",
        ]);

        Profesor::create([

            "Nombre"       => "Miguel Manuel Pagán",
            "Especialidad" => "Profesor de DWEC y DIW",
        ]);

        Profesor::create([

            "Nombre"       => "Rodrigo Martínez",
            "Especialidad" => "Profesor de LMSGI",
        ]);

        Profesor::create([

            "Nombre"       => "Manuel Esteso",
            "Especialidad" => "Profesor de DAW",
        ]);

        Profesor::create([

            "Nombre"       => "Maximiliano Abellán",
            "Especialidad" => "Profesor de Entornos de Desarrollo y Programación",
        ]);

        Profesor::create([

            "Nombre"       => "Ángel Gil García",
            "Especialidad" => "Profesor de Bases de Datos",
        ]);

        Profesor::create([

            "Nombre"       => "Ana Isabel Cerón",
            "Especialidad" => "Profesora de Sistemas Informáticos",
        ]);

        Profesor::create([

            "Nombre"       => "Jose Ramón Pelegrín Fuster",
            "Especialidad" => "Profesor de Inglés",
        ]);

        Profesor::create([

            "Nombre"       => "Enmanuel Kant",
            "Especialidad" => "Profesor de Filosofía",
        ]);

        Profesor::create([

            "Nombre"       => "Shigeru Miyamoto",
            "Especialidad" => "Profesor de Desarrollo de Videojuegos",
        ]);

        Profesor::create([

            "Nombre"       => "Antonin Dvorak",
            "Especialidad" => "Profesor de Música Clásica",
        ]);

        Profesor::create([

            "Nombre"       => "Benito Pérez Galdós",
            "Especialidad" => "Profesor de Literatura",
        ]);

        Profesor::create([

            "Nombre"       => "André Tanneberger",
            "Especialidad" => "Profesor de Música Electrónica",
        ]);

        Profesor::create([

            "Nombre"       => "Carlo Ancelotti",
            "Especialidad" => "Profesor de Educación Física",
        ]);

        Profesor::create([

            "Nombre"       => "David Cegarra",
            "Especialidad" => "Profesor de Matemáticas",
        ]);
    }
}
