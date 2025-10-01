@foreach ($horarios->groupBy('ID_Asignatura') as $asignaturaHorarios)
    <h3 class="font-semibold mt-4">
        {{ $asignaturaHorarios->first()->asignatura->NombreAsignatura }}
    </h3>
    <div class="overflow-auto mb-8">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-yellow-400 text-white">
                    <th class="border p-2 text-center">NOMBRE</th>
                    <th class="border p-2 text-center">APELLIDO</th>
                    <th class="border p-2 text-center">SEMESTRE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaturaHorarios->unique('ID_Estudiante') as $horario)
                    <tr class="hover:bg-gray-100">
                        <td class="border p-2 text-center">
                            {{ $horario->estudiante->Nombre }}
                        </td>
                        <td class="border p-2 text-center">
                            {{ $horario->estudiante->Apellido }}
                        </td>
                        <td class="border p-2 text-center">
                            {{ $horario->estudiante->Semestre }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endforeach
