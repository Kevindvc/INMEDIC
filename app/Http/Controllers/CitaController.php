<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Doctor;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $citas = auth()->user()->citas()->with('doctor')->latest()->get();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $doctores = Doctor::all();
        return view('citas.create', compact('doctores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctores,id',
            'fecha_hora' => 'required|date|after:now',
            'especialidad' => 'required|string|max:100',
            'metodo' => 'required|in:videollamada,llamada,SMS',
            'notas_adicionales' => 'nullable|string|max:255',
        ]);

        $cita = new Cita($request->all());
        $cita->user_id = auth()->id();
        $cita->save();

        return redirect()->route('citas.index')->with('success', 'Cita agendada correctamente');
    }

    public function show(Cita $cita)
    {
        $this->authorize('view', $cita);
        return view('citas.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        $this->authorize('update', $cita);
        $doctores = Doctor::all();
        return view('citas.edit', compact('cita', 'doctores'));
    }

    public function update(Request $request, Cita $cita)
    {
        $this->authorize('update', $cita);

        $request->validate([
            'doctor_id' => 'required|exists:doctores,id',
            'fecha_hora' => 'required|date|after:now',
            'especialidad' => 'required|string|max:100',
            'metodo' => 'required|in:videollamada,llamada,SMS',
            'notas_adicionales' => 'nullable|string|max:255',
        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente');
    }

    public function cancelar(Cita $cita)
    {
        $this->authorize('update', $cita);
        
        $cita->estado = 'Cancelada';
        $cita->save();
        
        return back()->with('success', 'Cita cancelada correctamente');
    }
}