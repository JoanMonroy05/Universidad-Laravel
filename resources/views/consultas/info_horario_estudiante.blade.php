<div class="overflow-auto mb-8 flex justify-center">
    <table class="border-collapse border border-gray-300" style="min-width: 400px;">
        <thead>
            <tr class="bg-yellow-400 text-white">
                <th class="border p-2 text-left">ASIGNATURA</th>
                <th class="border p-2 text-left">DOCENTE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horarios->unique('ID_Asignatura') as $horario)
                <tr class="hover:bg-gray-100">
                    <td class="border p-2 font-semibold">
                        {{ strtoupper($horario->asignatura->NombreAsignatura) }}
                    </td>
                    <td class="border p-2 font-semibold">
                        {{ strtoupper($horario->docente->Nombre) }} {{ strtoupper($horario->docente->Apellido) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
