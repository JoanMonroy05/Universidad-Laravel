<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Panel Ingeniería')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-64 bg-blue-700 text-white flex flex-col fixed top-0 left-0 h-screen z-20">
        <div class="p-4 text-center text-xl font-bold border-b border-blue-600">
            <i class="fa-solid fa-graduation-cap mr-2"></i> Facultad Ingeniería
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('estudiantes.index') }}" class="block px-3 py-2 rounded hover:bg-blue-500"><i class="fa-solid fa-user-graduate mr-2"></i> Estudiantes</a>
            <a href="{{ route('docentes.index') }}" class="block px-3 py-2 rounded hover:bg-blue-500"><i class="fa-solid fa-chalkboard-teacher mr-2"></i> Docentes</a>
            <a href="{{ route('asignaturas.index') }}" class="block px-3 py-2 rounded hover:bg-blue-500"><i class="fa-solid fa-book mr-2"></i> Asignaturas</a>
            <a href="{{ route("horarios.index") }}" class="block px-3 py-2 rounded hover:bg-blue-500"><i class="fa-solid fa-clock mr-2"></i> Horarios</a>
            <a href="{{ route("consultas.index") }}" class="block px-3 py-2 rounded hover:bg-blue-500"><i class="fa-solid fa-search mr-2"></i> Consultas</a>
        </nav>
    </aside>

    {{-- Contenido principal --}}
    <div class="flex-1 flex flex-col ml-64">
        {{-- Encabezado --}}
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">@yield('header','Panel')</h1>            
        </header>

        {{-- Contenido dinámico --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>

        {{-- Footer opcional --}}
        <footer class="bg-gray-200 text-center py-3 text-sm text-gray-600">
            © {{ date('Y') }} Facultad de Ingeniería - Sistema de Horarios
        </footer>
    </div>

</body>
</html>
