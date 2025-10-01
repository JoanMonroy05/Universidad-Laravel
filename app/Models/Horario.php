<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'ID_Horario';
    protected $fillable = [
        'ID_Estudiante',
        'ID_Docente',
        'ID_Asignatura',
        'Dia',
        'HoraInicio',
        'HoraFin'
    ];

    // Relación con estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'ID_Estudiante');
    }

    // Relación con docente
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'ID_Docente');
    }

    // Relación con asignatura
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'ID_Asignatura');
    }
}
