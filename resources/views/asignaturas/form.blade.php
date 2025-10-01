<div class="flex items-center">
    <label for="NombreAsignatura" class="block text-gray-700 font-semibold w-32">Nombre Asignatura</label>
    <input type="text" name="NombreAsignatura" required
        class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300"
        placeholder="Ingrese el nombre de la asignatura" value="{{ old('NombreAsignatura', $asignatura->NombreAsignatura ?? '') }}">
</div>

<div class="flex items-center">
    <label for="Creditos" class="block text-gray-700 font-semibold w-32">Creditos</label>
    <input type="number" name="Creditos" min="1" required
        class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Ingrese los creditos"
        value="{{ old('Creditos', $asignatura->Creditos ?? '') }}">
</div>
