<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        $cita = new Cita();
        $cita->servicio = $request->servicio;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->cliente_nombre = $request->cliente_nombre;
        $cita->cliente_correo = $request->cliente_correo;
        $cita->cliente_telefono = $request->cliente_telefono;
        $cita->cliente_direccion = $request->cliente_direccion;
        $cita->mascota_nombre = $request->mascota_nombre;
        $cita->mascota_tipo = $request->mascota_tipo;
        $cita->mascota_raza = $request->mascota_raza;
        $cita->mascota_edad = $request->mascota_edad;
        $cita->mascota_peso = $request->mascota_peso;
        $cita->notas = $request->notas;
        $cita->save();
    
        return redirect()->route('citas.index')->with('success', 'Cita agendada con éxito');
    }
        
    public function edit(Cita $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'servicio' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required',
            'cliente_nombre' => 'required',
            'cliente_correo' => 'required|email',
            'cliente_telefono' => 'required',
            'mascota_nombre' => 'required',
            'mascota_tipo' => 'required',
        ]);

        $cita->update($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada correctamente.');
    }
}

