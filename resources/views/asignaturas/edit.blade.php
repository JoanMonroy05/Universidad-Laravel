@extends('layouts.app')

@section('title', 'Actualizar Asignatura | Gestión')
@section('header', 'Actualizar Asignatura')

@section('content')
<form action="{{ route('asignaturas.update', $asignatura->ID_Asignatura) }}" method="POST" class="space-y-4 mx-auto p-6 rounded-lg" novalidate>
    @include('partials.alertas')
    @csrf
    @method('PUT')

    @include('asignaturas.form')

    <button type="submit" 
        class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition-all m-auto block">
        Actualizar Asignatura
    </button>
</form>
@endsection