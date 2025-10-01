<div class="overflow-auto mb-8">
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-yellow-400 text-white">
                <th class="border p-2 text-left">NOMBRE</th>
                @foreach ($dias as $dia)
                    <th class="border p-2 text-center">{{ strtoupper($dia) }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $nombreAsignatura => $lista)
                <tr class="hover:bg-gray-100">
                    <td class="border p-2 font-semibold">
                        {{ strtoupper($nombreAsignatura) }}
                    </td>
                    @foreach ($dias as $dia)
                        <td class="border p-2 text-center">
                            @foreach ($lista->where('Dia', $dia)->unique(fn($item) => $item->HoraInicio . $item->HoraFin) as $h)
                                {{ $h->HoraInicio }} - {{ $h->HoraFin }}
                            @endforeach
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
