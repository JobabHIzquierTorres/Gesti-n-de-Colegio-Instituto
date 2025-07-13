<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //
    protected $table = 'matriculas';
    protected $primaryKey = 'ID_Matricula'; // necesaio para que laravel sepa cuál es la ID 



    protected $fillable = [
        'ID_Estudiante',
        'ID_Curso',
        'Fecha_Matriculacion'
    ];

    // Relación 1:1 con Estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'ID_Estudiante');
    }

    // Relación N:1 con Curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'ID_Curso');
    }
}
