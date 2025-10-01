@extends('layouts.app')

@section('title', 'Crear Asignatura | Gestión')
@section('header', 'Crear Nueva Asignatura')

@section('content')
<form action="{{ route('asignaturas.store') }}" method="POST" class="space-y-4 mx-auto p-6 rounded-lg" novalidate>
    @include('partials.alertas')
    @csrf

    @include('asignaturas.form')

    <button type="submit" 
        class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition-all m-auto block">
        Guardar Asignatura
    </button>
</form>
@endsection