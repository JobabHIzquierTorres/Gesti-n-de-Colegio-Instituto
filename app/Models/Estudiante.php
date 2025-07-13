<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $table    = "estudiantes";
    protected $primaryKey = 'ID_Estudiante'; // necesaio para que laravel sepa cuál es la ID de la tabla estudiantes

    protected $fillable = [
        "Nombre",
        "Fecha_Nacimiento",
        "Direccion"
    ];

    public function matricula()
    {
        return $this->hasOne(Matricula::class, 'ID_Estudiante'); // 1:1 Matriculas
    }

    public function calificacion()
    {
        return $this->hasOne(Calificacion::class, 'ID_Estudiante'); // 1:1 Calificaciones
    }
}
