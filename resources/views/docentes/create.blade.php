@extends('layouts.app')

@section('title', 'Crear Docente | Gestión')
@section('header', 'Crear Nuevo Docente')

@section('content')
<form action="{{ route('docentes.store') }}" method="POST" class="space-y-4 mx-auto p-6 rounded-lg" novalidate>
    @include('partials.alertas')
    @csrf

    <div class="flex items-center">
        <label for="Nombre" class="block text-gray-700 font-semibold w-32">Nombre</label>
        <input type="text" name="Nombre" required
            class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Ingrese el nombre" value="{{ old('Nombre') }}">
    </div>

    <div class="flex items-center">
        <label for="Apellido" class="block text-gray-700 font-semibold w-32">Apellido</label>
        <input type="text" name="Apellido" required
            class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Ingrese el apellido" value="{{ old('Apellido') }}">
    </div>

    <div class="flex items-center">
        <label for="Especialidad" class="block text-gray-700 font-semibold w-32">Especialidad</label>
        <input type="text" name="Especialidad" required
            class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Ingrese la especialidad" value="{{ old('Especialidad') }}">
    </div>

    <button type="submit" 
        class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition-all m-auto block">
        Guardar Docente
    </button>
</form>
@endsection