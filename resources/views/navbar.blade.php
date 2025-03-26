<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Lunapets</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

    <!-- Barra superior azul -->
   <!-- Barra superior azul -->
<div class="bg-primary text-white text-center py-2">
    <div class="container d-flex justify-content-between">
        <div>
            <i class="text-danger">🚑 </i><strong>URGENCIAS VETERINARIAS 24H</strong>
        </div>
        <div>
            <i class=" text-info">📞 </i> <strong>CONTÁCTANOS:</strong> 3106305409
        </div>
    </div>
</div>


    <!-- Encabezado -->
    <div class="text-center py-3">
        <img src="{{ asset('img/logo.jpg') }}" alt="Ejemplo" width="120">
        <h1 class="fw-bold">CONSULTORIO VETERINARIO LUNAPETS</h1>
        <p class="text-muted">¡Medicina Veterinaria Con Responsabilidad!</p>
    </div>

    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-lg  navbar-light bg-light shadow-sm ">
        <div class="container">
            <!-- Logo en el Navbar -->
            <a class="navbar-brand fw-bold" href="#">LUNAPETS</a>

            <!-- Botón para menú en móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">INICIO</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('catalogo') }}">CATÁLOGO</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('servicios') }}">SERVICIOS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cita') }}">CITAS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">NOSOTROS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">BLOG</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contactanos') }}">CONTÁCTANOS</a></li>
                </ul>

                <!-- Botón de sesión y búsqueda -->
                <!-- Botón de sesión y búsqueda -->
<div class="d-flex align-items-center">
    <a href="#" class="btn btn-sm btn-outline-primary me-2">Iniciar Sesión</a>
    <div class="input-group input-group-sm" style="max-width: 200px;">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control" placeholder="Buscar Producto">
    </div>
</div>

            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
