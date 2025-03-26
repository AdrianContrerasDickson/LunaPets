<!DOCTYPE html>
@extends('layouts.layout')

@section('content')
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicios Veterinarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



    <div class="container mt-5">
        <h2 class="text-primary mb-4">Servicios Veterinarios</h2>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/consulta_general.jpeg') }}" alt="Ejemplo" width="">
                    <div class="card-body">
                        <h5 class="card-title">Consulta General</h5>
                        <p class="card-text">Brindamos atención médica completa para tu mascota, incluyendo chequeos de rutina, diagnóstico de enfermedades y tratamiento personalizado.</p>
                        <p><strong>Dr. Juan Pérez</strong><br>Especialista en Medicina Veterinaria</p>
                        <a href="cita.html" class="btn btn-primary">Agenda tu cita</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/vacunas.jpg" class="card-img-top" alt="Vacunación y Desparasitación">
                    <div class="card-body">
                        <h5 class="card-title">Vacunación y Desparasitación</h5>
                        <p class="card-text">Protege la salud de tu mascota con nuestro esquema completo de vacunación y desparasitación, diseñado para prevenir enfermedades comunes.</p>
                        <p><strong>Dra. María González</strong><br>Especialista en Medicina Preventiva</p>
                        <a href="cita.html" class="btn btn-primary">Agenda tu cita</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/peluqueria.webp" class="card-img-top" alt="Servicio de Peluquería">
                    <div class="card-body">
                        <h5 class="card-title">Servicio de Peluquería</h5>
                        <p class="card-text">Mantenemos a tu mascota limpia y con el mejor aspecto con nuestros servicios de baño, corte y estilismo.</p>
                        <a href="cita.html" class="btn btn-primary">Agenda tu cita</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/guarderia.webp" class="card-img-top" alt="Servicio de Guardería">
                    <div class="card-body">
                        <h5 class="card-title">Servicio de Guardería</h5>
                        <p class="card-text">Brindamos un espacio seguro y cómodo para tu mascota mientras no estás en casa.</p>
                        <a href="cita.html" class="btn btn-primary">Reserva tu espacio</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/medico.jpg" class="card-img-top" alt="Servicio Médico">
                    <div class="card-body">
                        <h5 class="card-title">Servicio Médico</h5>
                        <p class="card-text">Atención veterinaria avanzada para el diagnóstico y tratamiento de enfermedades en tu mascota.</p>
                        <a href="cita.html" class="btn btn-primary">Consulta disponibilidad</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/catalogo.jpg" class="card-img-top" alt="Catálogo de Productos">
                    <div class="card-body">
                        <h5 class="card-title">Catálogo de Productos</h5>
                        <p class="card-text">Encuentra una gran variedad de productos para el cuidado y bienestar de tu mascota.</p>
                        <a href="Catalogo.html" class="btn btn-primary">Ver catálogo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection