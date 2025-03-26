@extends('layouts.base')

@section('content')

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

    <h1>Lista de Citas</h1>
    <a href="{{ route('citas.create') }}">Agendar Nueva Cita</a>

    @foreach ($citas as $cita)
        <div>
            <p><strong>Servicio:</strong> {{ $cita->servicio }}</p>
            <p><strong>Fecha:</strong> {{ $cita->fecha }} - {{ $cita->hora }}</p>
            <p><strong>Cliente:</strong> {{ $cita->cliente_nombre }} ({{ $cita->cliente_correo }})</p>
            <a href="{{ route('citas.edit', $cita->id) }}">Editar</a>
            <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
@endsection
