@extends('layouts.app')

@section('title', 'Crear Docente | Gestión')
@section('header', 'Gestión de Docentes')

@section('content')
<div>
    <a href="{{ route('docentes.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 mb-4 rounded hover:bg-blue-700"><i class="fas fa-plus"></i> Agregar Docente</a>
</div>
@include('partials.alertas')
@if($docentes->isNotEmpty())
<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 rounded-lg">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Apellido</th>
                <th class="px-4 py-2 text-left">Especialidad</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docentes as $docente)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $docente->ID_Docente }}</td>
                    <td class="px-4 py-2">{{ $docente->Nombre }}</td>
                    <td class="px-4 py-2">{{ $docente->Apellido }}</td>
                    <td class="px-4 py-2">{{ $docente->Especialidad }}</td>
                    <td class="px-4 py-2">
                        @include('partials.buttons_accions', ['routePrefix' => 'docentes', 'model' => $docente])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <p>No hay estudiantes registrados.</p>
@endif
@endsection