<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $primaryKey = 'ID_Docente';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Especialidad'
    ];

    // Un docente puede tener muchos horarios
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'ID_Docente');
    }
}
