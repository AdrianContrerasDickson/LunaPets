<!DOCTYPE html>
@extends('layouts.layout')

@section('content')
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visítanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-info a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease-in-out;
        }
        .contact-info a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .map-container {
            margin-top: 30px;
            text-align: center;
        }
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .text-rosado{
            color: #e83e8c;
        }
    </style>
</head>
<body>






    <div class="container text-center my-5">
        <h1 class="text-rosado">Visítanos</h1>
        <hr>
        <div class="row text-start mt-4">
            <div class="col-md-4">
                <h4 class="text-primary">Atención a Pacientes</h4>
                <p><strong>Teléfono fijo:</strong> (605) 3064622</p>
                <p><strong>Teléfono fijo:</strong> (605) 3064661</p>
                <p><strong>WhatsApp Recepción:</strong> <a href="tel:3004639908">3004639908</a></p>
                <p><strong>WhatsApp Recepción:</strong> <a href="tel:3106305409">3106305409</a></p>
                <p><strong>WhatsApp Veterinarios:</strong> <a href="tel:3012343781">3012343781</a></p>
                <p><strong>E-Mail:</strong> <a href="mailto:info@donperro.com.co">info@donperro.com.co</a></p>
            </div>
            <div class="col-md-4">
                <h4 class="text-primary">Clínica & Pet Shop</h4>
                <p><strong>WhatsApp Pet Shop:</strong> <a href="tel:3187076504">3187076504</a></p>
                <p>Cra 43B N° 82-170</p>
                <p>Barrio Granadillo</p>
                <p>Barranquilla / Atlántico</p>
            </div>
            <div class="col-md-4">
                <h4 class="text-primary">Horario de Atención</h4>
                <p><strong>Urgencias:</strong> 24 Horas (Abierto todos los días)</p>
                <p><strong>Pet Shop:</strong> 7:00am a 10:00pm (Abierto todos los días)</p>
                <p><strong>Salón de Belleza:</strong> 8:00am a 3:00pm (Lunes a Sábado)</p>
            </div>
        </div>

        <!-- Mapa interactivo -->
        <div class="map-container">
            <h4 class="text-primary">Nuestra Ubicación</h4>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3110148853!2d-75.14154516735081!3d8.66194234018843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5bf1c59bcbcb1b%3A0x77b18f6f83ee6d82!2sCra.%2016%2C%20San%20Marcos%2C%20Sucre!5e0!3m2!1ses!2sco!4v1741310557631!5m2!1ses!2sco" width="600" height="450" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</body>
</html>
@endsection