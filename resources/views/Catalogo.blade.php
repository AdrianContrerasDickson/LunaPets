<!DOCTYPE html>
@extends('layouts.layout')

@section('content')
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo Veterinaria</title>
  <!-- Incluyendo Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contenedor-sombra {
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
      background-color: red;
      border-radius: 8px;
      text-align: center;
    }
    .hero {
      background-image: url('https://hospitalveterinario.cr/wp-content/uploads/2020/04/Que-es-un-Medico-Veterinario-blog-1-1024x538.jpg');
      background-size: cover;
      background-position: center;
      height: 500px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .card-img-top {
      object-fit: cover;
      height: 200px;

    }
      .text-pink {
        color: #e83e8c !important;
    }

    .text-green{
      color: #3ee88a;
    }

  </style>
  
</head>
<body>

  
  
  <div class="contenedor-sombra">
    <div class="container">
      <h1 class="text-pink">Bienvenidos a nuestra Veterinaria</h1>
      <h3 class="text-green">¡Cuidamos a tu mascota como si fuera nuestra!</h3> 
    </div>
  </div>

  <!-- Sección Hero (Imagen Principal) -->
  <div class="hero">
      <div class="container">

      </div>
  </div>

  

  <!-- Sección de Servicios -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Nuestros Servicios</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/400x200?text=Consulta+Veterinaria" class="card-img-top" alt="Consulta Veterinaria">
          <div class="card-body">
            <h5 class="card-title">Consulta Veterinaria</h5>
            <p class="card-text">Brindamos atención especializada para tu mascota, desde chequeos hasta emergencias.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/400x200?text=Vacunación" class="card-img-top" alt="Vacunación">
          <div class="card-body">
            <h5 class="card-title">Vacunación</h5>
            <p class="card-text">Protege la salud de tu mascota con nuestras vacunas y tratamientos preventivos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/400x200?text=Cirugía" class="card-img-top" alt="Cirugía">
          <div class="card-body">
            <h5 class="card-title">Cirugía</h5>
            <p class="card-text">Contamos con un equipo especializado para realizar cirugías de baja y alta complejidad.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sección de Productos -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Nuestros Productos</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/400x200?text=Alimentos" class="card-img-top" alt="Alimentos">
          <div class="card-body">
            <h5 class="card-title">Alimentos</h5>
            <p class="card-text">Ofrecemos una variedad de alimentos especializados para el cuidado de tu mascota.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/400x200?text=Juguetes" class="card-img-top" alt="Juguetes">
          <div class="card-body">
            <h5 class="card-title">Juguetes</h5>
            <p class="card-text">Diversión garantizada para tu mascota con nuestros juguetes de calidad.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/400x200?text=Accesorios" class="card-img-top" alt="Accesorios">
          <div class="card-body">
            <h5 class="card-title">Accesorios</h5>
            <p class="card-text">Collares, correas y otros accesorios de alta calidad para tu amigo fiel.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sección de Contacto -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Contacto</h2>
    <p class="text-center">¿Tienes alguna pregunta? ¡Contáctanos!</p>
    <div class="row">
      <div class="col-md-6">
        <h5>Dirección:</h5>
        <p>Calle Ejemplo 123, Ciudad, País</p>
      </div>
      <div class="col-md-6">
        <h5>Teléfono:</h5>
        <p>+123 456 7890</p>
        <h5>Email:</h5>
        <p>contacto@veterinaria.com</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Veterinaria Ejemplo. Todos los derechos reservados.</p>
  </footer>

  <!-- Scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection