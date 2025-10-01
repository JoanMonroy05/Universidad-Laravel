<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';
    protected $primaryKey = 'ID_Asignatura';
    protected $fillable = [
        'NombreAsignatura',
        'Creditos'
    ];

    // Una asignatura puede estar en muchos horarios
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'ID_Asignatura');
    }
}
