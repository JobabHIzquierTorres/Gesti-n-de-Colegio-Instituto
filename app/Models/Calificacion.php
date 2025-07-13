<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    //
    protected $table      = 'calificaciones';
    protected $primaryKey = 'ID_Calificacion'; // Especifica a eloquent cuál es la ID de la tabla

    protected $fillable = [
        'ID_Estudiante',
        'ID_Curso',
        'Nota'
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
