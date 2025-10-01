<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'ID_Estudiante';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Semestre'
    ];

    // Un estudiante puede tener muchos horarios
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'ID_Estudiante');
    }
}
