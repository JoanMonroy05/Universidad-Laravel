{{-- Estudiante --}}
<div class="flex items-center">
    <label for="ID_Estudiante" class="block text-gray-700 font-semibold w-32">Estudiante</label>
    <select name="ID_Estudiante" required class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
        <option disabled {{ isset($horario) ? '' : 'selected' }}>Seleccione un estudiante</option>
        @foreach ($estudiantes as $estudiante)
            <option value="{{ $estudiante->ID_Estudiante }}"
                {{ old('ID_Estudiante', $horario->ID_Estudiante ?? '') == $estudiante->ID_Estudiante ? 'selected' : '' }}>
                {{ $estudiante->Nombre }} {{ $estudiante->Apellido }}
            </option>
        @endforeach
    </select>
</div>

{{-- Docente --}}
<div class="flex items-center">
    <label for="ID_Docente" class="block text-gray-700 font-semibold w-32">Docente</label>
    <select name="ID_Docente" required class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
        <option disabled {{ isset($horario) ? '' : 'selected' }}>Seleccione un docente</option>
        @foreach ($docentes as $docente)
            <option value="{{ $docente->ID_Docente }}"
                {{ old('ID_Docente', $horario->ID_Docente ?? '') == $docente->ID_Docente ? 'selected' : '' }}>
                {{ $docente->Nombre }} {{ $docente->Apellido }}
            </option>
        @endforeach
    </select>
</div>

{{-- Asignatura --}}
<div class="flex items-center">
    <label for="ID_Asignatura" class="block text-gray-700 font-semibold w-32">Asignatura</label>
    <select name="ID_Asignatura" required class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
        <option disabled {{ isset($horario) ? '' : 'selected' }}>Seleccione una asignatura</option>
        @foreach ($asignaturas as $asignatura)
            <option value="{{ $asignatura->ID_Asignatura }}"
                {{ old('ID_Asignatura', $horario->ID_Asignatura ?? '') == $asignatura->ID_Asignatura ? 'selected' : '' }}>
                {{ $asignatura->NombreAsignatura }}
            </option>
        @endforeach
    </select>
</div>

{{-- Día --}}
<div class="flex items-center">
    <label for="Dia" class="block text-gray-700 font-semibold w-32">Día</label>
    <select name="Dia" required class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
        <option disabled {{ isset($horario) ? '' : 'selected' }}>Seleccione un día</option>
        @foreach (['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'] as $dia)
            <option value="{{ $dia }}" {{ old('Dia', $horario->Dia ?? '') == $dia ? 'selected' : '' }}>
                {{ $dia }}</option>
        @endforeach
    </select>
</div>
{{-- Horas --}}
<div class="flex items-center">
    <label for="HoraInicio" class="block text-gray-700 font-semibold w-32">Hora Inicio</label>
    <input type="time" name="HoraInicio" required class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300"
        value="{{ old('HoraInicio', $horario->HoraInicio ?? '') }}">
</div>
<div class="flex items-center">
    <label for="HoraFin" class="block text-gray-700 font-semibold w-32">Hora Fin</label>
    <input type="time" name="HoraFin" required class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300"
        value="{{ old('HoraFin', $horario->HoraFin ?? '') }}">
</div>
