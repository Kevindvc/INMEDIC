@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalles de la Cita</h1>

    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <h5>Información General</h5>
                    <p><strong>Fecha y Hora:</strong> {{ \Carbon\Carbon::parse($cita->fecha_hora)->format('d/m/Y H:i') }}</p>
                    <p><strong>Doctor:</strong> {{ $cita->doctor->nombre ?? 'No asignado' }}</p>
                    <p><strong>Especialidad:</strong> {{ $cita->especialidad }}</p>
                </div>
                <div class="col-md-6">
                    <h5>Detalles</h5>
                    <p><strong>Método:</strong> 
                        @if($cita->metodo == 'videollamada')
                            Videollamada
                        @elseif($cita->metodo == 'llamada')
                            Llamada
                        @else
                            SMS
                        @endif
                    </p>
                    <p><strong>Estado:</strong> 
                        @if($cita->estado == 'Pendiente')
                            <span class="badge bg-warning text-dark">Pendiente</span>
                        @elseif($cita->estado == 'Confirmada')
                            <span class="badge bg-success">Confirmada</span>
                        @elseif($cita->estado == 'Cancelada')
                            <span class="badge bg-danger">Cancelada</span>
                        @else
                            <span class="badge bg-secondary">Completada</span>
                        @endif
                    </p>
                    @if($cita->enlace)
                        <p><strong>Enlace:</strong> <a href="{{ $cita->enlace }}" target="_blank">{{ $cita->enlace }}</a></p>
                    @endif
                </div>
            </div>

            @if($cita->notas_adicionales)
                <div class="mb-3">
                    <h5>Notas Adicionales</h5>
                    <p>{{ $cita->notas_adicionales }}</p>
                </div>
            @endif

            @if($cita->consulta)
                <div class="mb-3">
                    <h5>Información de Consulta</h5>
                    <p><strong>Síntomas:</strong> {{ $cita->consulta->sintomas }}</p>
                    <p><strong>Diagnóstico:</strong> {{ $cita->consulta->diagnostico }}</p>
                    <p><strong>Tratamiento:</strong> {{ $cita->consulta->tratamiento }}</p>
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('citas.index') }}" class="btn btn-secondary">Volver</a>
                @if($cita->estado == 'Pendiente')
                    <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-primary">Editar</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection