@extends('layouts.layout')

@section('content')
<div class="container mt-4 form-container">
    <h2 class="text-center mb-4">Editar Cita</h2>

    <form action="{{ route('citas.update', $cita->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método para actualizar -->

        <div class="row">
            <div class="col-lg-8">
                <!-- Información del Servicio -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del Servicio</h5>
                        <div class="mb-3">
                            <label class="form-label">Seleccione un servicio:</label>
                            <select name="servicio" class="form-select" required>
                                <option value="consulta" {{ $cita->servicio == 'consulta' ? 'selected' : '' }}>Consulta General</option>
                                <option value="vacunacion" {{ $cita->servicio == 'vacunacion' ? 'selected' : '' }}>Vacunación</option>
                                <option value="peluqueria" {{ $cita->servicio == 'peluqueria' ? 'selected' : '' }}>Peluquería</option>
                                <option value="guarderia" {{ $cita->servicio == 'guarderia' ? 'selected' : '' }}>Guardería</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Fecha de la Cita *</label>
                                <input type="date" name="fecha" class="form-control" value="{{ $cita->fecha }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Hora de la Cita *</label>
                                <input type="time" name="hora" class="form-control" value="{{ $cita->hora }}" required>
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
                                <input type="text" name="cliente_nombre" class="form-control" value="{{ $cita->cliente_nombre }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Correo Electrónico *</label>
                                <input type="email" name="cliente_correo" class="form-control" value="{{ $cita->cliente_correo }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Teléfono *</label>
                                <input type="tel" name="cliente_telefono" class="form-control" value="{{ $cita->cliente_telefono }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Dirección *</label>
                                <input type="text" name="cliente_direccion" class="form-control" value="{{ $cita->cliente_direccion }}" required>
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
                                <input type="text" name="mascota_nombre" class="form-control" value="{{ $cita->mascota_nombre }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tipo de Mascota *</label>
                                <select name="mascota_tipo" class="form-select" required>
                                    <option value="perro" {{ $cita->mascota_tipo == 'perro' ? 'selected' : '' }}>Perro</option>
                                    <option value="gato" {{ $cita->mascota_tipo == 'gato' ? 'selected' : '' }}>Gato</option>
                                    <option value="ave" {{ $cita->mascota_tipo == 'ave' ? 'selected' : '' }}>Ave</option>
                                    <option value="otro" {{ $cita->mascota_tipo == 'otro' ? 'selected' : '' }}>Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Raza</label>
                                <input type="text" name="mascota_raza" class="form-control" value="{{ $cita->mascota_raza }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Edad (años)</label>
                                <input type="number" name="mascota_edad" class="form-control" value="{{ $cita->mascota_edad }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Peso (kg)</label>
                                <input type="number" name="mascota_peso" class="form-control" value="{{ $cita->mascota_peso }}" step="0.1">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notas Adicionales</label>
                            <textarea name="notas" class="form-control" rows="3">{{ $cita->notas }}</textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Actualizar Cita</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

