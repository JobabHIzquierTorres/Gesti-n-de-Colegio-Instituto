<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Estudiante::create([
            "Nombre"           => "Jobab H. Izquier Torres",
            "Fecha_Nacimiento" => "1987-06-06",
            "Direccion"        => "Calle Luna, Murcia, Región de Murcia, 30001",
        ]);

        Estudiante::create([
            "Nombre"           => "Alejandro García García",
            "Fecha_Nacimiento" => "1996-02-20",
            "Direccion"        => "Calle Sol, Cartagena, Región de Murcia, 30200",
        ]);

        Estudiante::create([
            "Nombre"           => "Jose Manuel",
            "Fecha_Nacimiento" => "1985-10-02",
            "Direccion"        => "Calle Río, Lorca, Región de Murcia, 30800",
        ]);

        Estudiante::create([
            "Nombre"           => "Ana García",
            "Fecha_Nacimiento" => "2000-11-20",
            "Direccion"        => "Avenida Mar, Águilas, Región de Murcia, 30880",
        ]);

        Estudiante::create([
            "Nombre"           => "Javier García",
            "Fecha_Nacimiento" => "2001-01-31",
            "Direccion"        => "Calle Norte, Alcantarilla, Región de Murcia, 30820",
        ]);

        Estudiante::create([
            "Nombre"           => "Óscar García",
            "Fecha_Nacimiento" => "1990-12-05",
            "Direccion"        => "Calle Sur, Molina de Segura, Región de Murcia, 30500",
        ]);

        Estudiante::create([
            "Nombre"           => "Elon Musk",
            "Fecha_Nacimiento" => "1979-02-21",
            "Direccion"        => "Calle Oeste, Torre Pacheco, Región de Murcia, 30700",
        ]);

        Estudiante::create([
            "Nombre"           => "Eric Satiè",
            "Fecha_Nacimiento" => "1980-08-08",
            "Direccion"        => "Calle Este, Jumilla, Región de Murcia, 30520",
        ]);

        Estudiante::create([
            "Nombre"           => "Victor Hugo",
            "Fecha_Nacimiento" => "1998-08-06",
            "Direccion"        => "Avenida Central, Cieza, Región de Murcia, 30530",
        ]);

        Estudiante::create([
            "Nombre"           => "Copito de Nieve",
            "Fecha_Nacimiento" => "1995-05-02",
            "Direccion"        => "Calle Mayor, San Javier, Región de Murcia, 30730",
        ]);

        Estudiante::create([
            "Nombre"           => "Fernando Católico",
            "Fecha_Nacimiento" => "1980-10-04",
            "Direccion"        => "Calle Jardín, Mazarrón, Región de Murcia, 30870",
        ]);

        Estudiante::create([
            "Nombre"           => "Josefa Pérez",
            "Fecha_Nacimiento" => "1966-12-03",
            "Direccion"        => "Calle Parque, Totana, Región de Murcia, 30850",
        ]);

        Estudiante::create([
            "Nombre"           => "Vinicius Junior",
            "Fecha_Nacimiento" => "1986-11-05",
            "Direccion"        => "Avenida del Faro, Los Alcázares, Región de Murcia, 30710",
        ]);

        Estudiante::create([
            "Nombre"           => "Josep Guardiola",
            "Fecha_Nacimiento" => "1978-12-12",
            "Direccion"        => "Calle Primavera, Puerto Lumbreras, Región de Murcia, 30890",
        ]);

        Estudiante::create([
            "Nombre"           => "Manuela Delgado",
            "Fecha_Nacimiento" => "1990-01-12",
            "Direccion"        => "Calle Invierno, Yecla, Región de Murcia, 30510",
        ]);

        Estudiante::create([
            "Nombre"           => "Lucca Sierra",
            "Fecha_Nacimiento" => "1980-12-23",
            "Direccion"        => "Calle Verano, Calasparra, Región de Murcia, 30420",
        ]);

        Estudiante::create([
            "Nombre"           => "Sergio García",
            "Fecha_Nacimiento" => "1996-06-15",
            "Direccion"        => "Calle Otoño, Alhama de Murcia, Región de Murcia, 30840",
        ]);

        Estudiante::create([
            "Nombre"           => "Melodi Pérez",
            "Fecha_Nacimiento" => "1986-02-23",
            "Direccion"        => "Calle Estrella, Archena, Región de Murcia, 30600",
        ]);

        Estudiante::create([
            "Nombre"           => "Penélope Lima",
            "Fecha_Nacimiento" => "1990-06-04",
            "Direccion"        => "Calle Horizonte, Fortuna, Región de Murcia, 30620",
        ]);

        Estudiante::create([
            "Nombre"           => "Carlos Pérez",
            "Fecha_Nacimiento" => "2001-07-22",
            "Direccion"        => "Calle Bosque, Cehegín, Región de Murcia, 30430",
        ]);

        Estudiante::create([
            "Nombre"           => "María García",
            "Fecha_Nacimiento" => "1989-11-03",
            "Direccion"        => "Calle Girasol, Bullas, Región de Murcia, 30180",
        ]);

        Estudiante::create([
            "Nombre"           => "Ana López",
            "Fecha_Nacimiento" => "1997-03-15",
            "Direccion"        => "Avenida Castillo, Moratalla, Región de Murcia, 30440",
        ]);

        Estudiante::create([
            "Nombre"           => "Luis García",
            "Fecha_Nacimiento" => "1995-05-10",
            "Direccion"        => "Calle Molino, Blanca, Región de Murcia, 30540",
        ]);

        Estudiante::create([
            "Nombre"           => "Elena Ruiz",
            "Fecha_Nacimiento" => "2000-09-18",
            "Direccion"        => "Calle Sendero, Ricote, Región de Murcia, 30610",
        ]);

        Estudiante::create([
            "Nombre"           => "Jorge Martínez",
            "Fecha_Nacimiento" => "1993-02-25",
            "Direccion"        => "Calle Cascada, Villanueva del Río Segura, Región de Murcia, 30630",
        ]);
    }
}
