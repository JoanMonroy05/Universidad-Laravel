<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Horario;
use Illuminate\Http\Request;

class ConsultaHorarioController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        $docentes = Docente::all();

        return view('consultas.index', [
            'estudiantes' => $estudiantes,
            'docentes' => $docentes,
            'horarios' => [],
            'tipo' => null,
            'nombre' => null,
        ]);
    }

    public function buscar(Request $request)
    {
        $request->validate([
            'tipo' => 'required|in:estudiante,docente',
            'id' => 'required|integer',
        ]);

        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

        if ($request->tipo === 'estudiante') {
            $horarios = Horario::with('asignatura', 'docente')
                ->where('ID_Estudiante', $request->id)->get();
            $materias = $horarios->groupBy(fn($h) => $h->asignatura->NombreAsignatura);
            $nombre = Estudiante::find($request->id)?->Nombre.' '.Estudiante::find($request->id)?->Apellido;
        } else {
            $horarios = Horario::with('asignatura', 'estudiante')
                ->where('ID_Docente', $request->id)->get();
            $materias = $horarios->groupBy(fn($h) => $h->asignatura->NombreAsignatura);
            $nombre = Docente::find($request->id)?->Nombre.' '.Docente::find($request->id)?->Apellido;
        }

        return view('consultas.index', [
            'estudiantes' => Estudiante::all(),
            'docentes' => Docente::all(),
            'dias' => $dias,
            'materias' => $materias,
            'horarios' => $horarios,
            'tipo' => $request->tipo,
            'nombre' => $nombre,
        ]);
    }
}
