<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::all();

        return view('horarios.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        $docentes = Docente::all();
        $asignaturas = Asignatura::all();

        return view('horarios.create', compact('estudiantes', 'docentes', 'asignaturas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ID_Estudiante' => 'required|exists:estudiantes,ID_Estudiante',
            'ID_Docente' => 'required|exists:docentes,ID_Docente',
            'ID_Asignatura' => 'required|exists:asignaturas,ID_Asignatura',
            'Dia' => 'required|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado',
            'HoraInicio' => 'required|date_format:H:i',
            'HoraFin' => 'required|date_format:H:i|after:HoraInicio',
        ]);

        // Validar choque para el ESTUDIANTE
        $choqueEstudiante = Horario::where('Dia', $validated['Dia'])
            ->where('ID_Estudiante', $validated['ID_Estudiante'])
            ->where(function ($q) use ($validated) {
                $q->whereBetween('HoraInicio', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhereBetween('HoraFin', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhere(function ($q2) use ($validated) {
                        $q2->where('HoraInicio', '<=', $validated['HoraInicio'])
                            ->where('HoraFin', '>=', $validated['HoraFin']);
                    });
            })->exists();

        if ($choqueEstudiante) {
            return back()->withErrors([
                'hora_inicio' => 'El estudiante ya tiene una clase en ese horario.',
            ])->withInput();
        }

        // Validar choque para el DOCENTE
        $choqueDocente = Horario::where('Dia', $validated['Dia'])
            ->where('ID_Docente', $validated['ID_Docente'])
            ->where('ID_Asignatura', '!=', $validated['ID_Asignatura'])
            ->where(function ($q) use ($validated) {
                $q->whereBetween('HoraInicio', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhereBetween('HoraFin', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhere(function ($q2) use ($validated) {
                        $q2->where('HoraInicio', '<=', $validated['HoraInicio'])
                            ->where('HoraFin', '>=', $validated['HoraFin']);
                    });
            })->exists();

        if ($choqueDocente) {
            return back()->withErrors([
                'hora_inicio' => 'El docente ya dicta otra materia en ese horario.',
            ])->withInput();
        }

        // Si no hay choques, guardar
        Horario::create($validated);

        return redirect()->route('horarios.index')
            ->with('success', 'Horario creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $horario = Horario::findOrFail($id);
        $estudiantes = Estudiante::all();
        $docentes = Docente::all();
        $asignaturas = Asignatura::all();

        return view('horarios.edit', compact('horario', 'estudiantes', 'docentes', 'asignaturas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'ID_Estudiante' => 'required|exists:estudiantes,ID_Estudiante',
            'ID_Docente' => 'required|exists:docentes,ID_Docente',
            'ID_Asignatura' => 'required|exists:asignaturas,ID_Asignatura',
            'Dia' => 'required|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado',
            'HoraInicio' => 'required|date_format:H:i',
            'HoraFin' => 'required|date_format:H:i|after:HoraInicio',
        ]);

        $horario = Horario::findOrFail($id);

        // Validar choque para el ESTUDIANTE
        $choqueEstudiante = Horario::where('Dia', $validated['Dia'])
            ->where('ID_Estudiante', $validated['ID_Estudiante'])
            ->where('ID_Horario', '!=', $horario->ID_Horario) // Excluir el horario actual
            ->where(function ($q) use ($validated) {
                $q->whereBetween('HoraInicio', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhereBetween('HoraFin', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhere(function ($q2) use ($validated) {
                        $q2->where('HoraInicio', '<=', $validated['HoraInicio'])
                            ->where('HoraFin', '>=', $validated['HoraFin']);
                    });
            })->exists();

        if ($choqueEstudiante) {
            return back()->withErrors([
                'hora_inicio' => 'El estudiante ya tiene una clase en ese horario.',
            ])->withInput();
        }

        // Validar choque para el DOCENTE
        $choqueDocente = Horario::where('Dia', $validated['Dia'])
            ->where('ID_Docente', $validated['ID_Docente'])
            ->where('ID_Horario', '!=', $horario->ID_Horario) // Excluir el horario actual
            ->where(function ($q) use ($validated) {
                $q->whereBetween('HoraInicio', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhereBetween('HoraFin', [$validated['HoraInicio'], $validated['HoraFin']])
                    ->orWhere(function ($q2) use ($validated) {
                        $q2->where('HoraInicio', '<=', $validated['HoraInicio'])
                            ->where('HoraFin', '>=', $validated['HoraFin']);
                    });
            })->exists();

        if ($choqueDocente) {
            return back()->withErrors([
                'hora_inicio' => 'El docente ya dicta otra clase en ese horario.',
            ])->withInput();
        }

        // Si no hay choques, actualizar
        $horario->update($validated);

        return redirect()->route('horarios.index')
            ->with('success', 'Horario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();

        return redirect()->route('horarios.index')->with('success', 'Horario eliminado correctamente.');
    }
}
