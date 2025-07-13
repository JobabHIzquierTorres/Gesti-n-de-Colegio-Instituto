<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    protected $table      = 'profesores';
    protected $primaryKey = 'ID_Profesor'; // necesaio para que laravel sepa cuál es la ID de la tabla profesores

    protected $fillable = [
        'Nombre',
        'Especialidad',
        'user_id',
    ];

    // Relación N:M con Cursos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'cursos_profesores', 'ID_Profesor', 'ID_Curso');
    }
}
