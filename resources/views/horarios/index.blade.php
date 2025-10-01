@extends('layouts.app')

@section('title', 'Horarios | Gestión')
@section('header', 'Gestión de Horarios')

@section('content')
    <div>
        <a href="{{ route('horarios.create') }}"
            class="inline-block bg-blue-500 text-white px-4 py-2 mb-4 rounded hover:bg-blue-700"><i class="fas fa-plus"></i> Agregar Horario</a>
    </div>
    @include('partials.alertas')
    @if ($horarios->isNotEmpty())
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Estudiante</th>
                        <th class="px-4 py-2 text-left">Docente</th>
                        <th class="px-4 py-2 text-left">Asignatura</th>
                        <th class="px-4 py-2 text-left">Día</th>
                        <th class="px-4 py-2 text-left">Hora Inicio</th>
                        <th class="px-4 py-2 text-left">Hora Fin</th>
                        <th class="px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $horario->ID_Horario }}</td>
                            <td class="px-4 py-2">{{ $horario->estudiante->Nombre }} {{ $horario->estudiante->Apellido }}</td>
                            <td class="px-4 py-2">{{ $horario->docente->Nombre }} {{ $horario->docente->Apellido }}</td>
                            <td class="px-4 py-2">{{ $horario->asignatura->NombreAsignatura }}</td>
                            <td class="px-4 py-2">{{ $horario->Dia }}</td>
                            <td class="px-4 py-2">{{ $horario->HoraInicio }}</td>
                            <td class="px-4 py-2">{{ $horario->HoraFin }}</td>
                            <td class="px-4 py-2">
                                @include('partials.buttons_accions', ['routePrefix' => 'horarios', 'model' => $horario])
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-600">No hay horarios disponibles.</p>
    @endif
@endsection
