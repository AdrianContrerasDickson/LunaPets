@extends('layouts.layout')

@section('content')
<div class="container mt-4 form-container">
    <h2 class="text-center mb-4">Agendar Cita</h2>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <!-- Información del Servicio -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del Servicio</h5>
                        <div class="mb-3">
                            <label class="form-label">Seleccione un servicio:</label>
                            <select name="servicio" class="form-select" required>
                                <option selected disabled value="">Selecciona un servicio</option>
                                <option value="consulta">Consulta General</option>
                                <option value="vacunacion">Vacunación</option>
                                <option value="peluqueria">Peluquería</option>
                                <option value="guarderia">Guardería</option>
                            </select>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Fecha de la Cita *</label>
                                <input type="date" name="fecha" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Hora de la Cita *</label>
                                <input type="time" name="hora" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información del Cliente -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del Cliente</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre Completo *</label>
                                <input type="text" name="cliente_nombre" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Correo Electrónico *</label>
                                <input type="email" name="cliente_correo" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Teléfono *</label>
                                <input type="tel" name="cliente_telefono" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Dirección *</label>
                                <input type="text" name="cliente_direccion" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información de la Mascota -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información de la Mascota</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre de la Mascota *</label>
                                <input type="text" name="mascota_nombre" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tipo de Mascota *</label>
                                <select name="mascota_tipo" class="form-select" required>
                                    <option selected disabled value="">Seleccionar</option>
                                    <option value="perro">Perro</option>
                                    <option value="gato">Gato</option>
                                    <option value="ave">Ave</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Raza</label>
                                <input type="text" name="mascota_raza" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Edad (años)</label>
                                <input type="number" name="mascota_edad" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Peso (kg)</label>
                                <input type="number" name="mascota_peso" class="form-control" step="0.1">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notas Adicionales</label>
                            <textarea name="notas" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Agendar Cita</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información de Servicios -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información de Servicios</h5>
                        <div class="services-info mb-3">
                            <h6 class="text-primary">Consulta General</h6>
                            <p class="small">Revisión completa de la salud de tu mascota por nuestros veterinarios especializados.</p>
                        </div>
                        <div class="services-info mb-3">
                            <h6 class="text-primary">Vacunación</h6>
                            <p class="small">Mantenemos al día las vacunas esenciales de tu mascota para prevenir enfermedades.</p>
                        </div>
                        <div class="services-info mb-3">
                            <h6 class="text-primary">Peluquería</h6>
                            <p class="small">Servicio de estética y cuidado para que tu mascota luzca y se sienta genial.</p>
                        </div>
                        <div class="services-info mb-3">
                            <h6 class="text-primary">Guardería</h6>
                            <p class="small">Cuidamos de tu mascota cuando no puedes estar con ella, en un ambiente seguro y divertido.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
