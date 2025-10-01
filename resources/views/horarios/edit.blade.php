@extends('layouts.app')

@section('title', 'Actualizar Horario | Gestión')
@section('header', 'Actualizar Horario')

@section('content')
{{-- Formulario para crear un horario --}}
<form action="{{ route('horarios.update', $horario->ID_Horario) }}" method="POST" class="space-y-4 mx-auto p-6 rounded-lg" novalidate>
    @include('partials.alertas')
    @csrf
    @method('PUT')

    @include('horarios.form')

    <button type="submit" class="bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition-all m-auto block">
        Actualizar Horario
    </button>
</form>
@endsection