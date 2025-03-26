<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'servicio', 'fecha', 'hora', 'cliente_nombre', 'cliente_correo',
        'cliente_telefono', 'cliente_direccion', 'mascota_nombre',
        'mascota_tipo', 'mascota_raza', 'mascota_edad', 'mascota_peso', 'notas'
    ];
}

