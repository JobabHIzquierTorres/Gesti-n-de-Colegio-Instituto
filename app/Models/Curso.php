<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //

    protected $table      = 'cursos';
    protected $primaryKey = 'ID_Curso';

    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];

    // Relación 1:N con Matrículas
    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'ID_Curso');
    }

    // Relación 1:N con Calificaciones
    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class, 'ID_Curso');
    }

    // Relación N:M con Profesores
    public function profesores()
    {
        return $this->belongsToMany(Profesor::class, 'cursos_profesores', 'ID_Curso', 'ID_Profesor');
    }
}
