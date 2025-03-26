<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('navbar') {{-- Incluye el navbar --}}
    
    <div class="container">
        @yield('content') {{-- Aquí irá el contenido de cada vista --}}
    </div>

</body>
</html>
