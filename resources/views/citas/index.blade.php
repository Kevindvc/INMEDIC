@extends('layouts.app')

@section('content')
<div class="appointment-container">
    <div class="appointment-box">
        <h2>Mis Citas</h2>
        
        <a href="{{ route('citas.create') }}" class="btn btn-primary mb-4">
            Nueva Cita
        </a>

        @forelse ($citas as $cita)
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Dr. {{ $cita->doctor->nombre }}</h5>
                        <p class="card-text mb-1">
                            <i class="bi bi-calendar-event"></i> {{ $cita->fecha_hora->format('d M Y H:i') }}
                        </p>
                        <p class="card-text">
                            <i class="bi bi-briefcase"></i> {{ $cita->especialidad }} 
                            <span class="badge bg-secondary ms-2">{{ $cita->metodo }}</span>
                        </p>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('citas.show', $cita) }}" class="btn btn-sm btn-outline-info">
                            <i class="bi bi-eye"></i> Ver
                        </a>
                        <a href="{{ route('citas.edit', $cita) }}" class="btn btn-sm btn-outline-warning">
                            <i class="bi bi-pencil"></i> Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-info text-center">
            <i class="bi bi-info-circle"></i> No tienes citas programadas
        </div>
        @endforelse
    </div>
</div>

<style>
    .appointment-box {
        background-color: #f4f4f4;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: auto;
    }
    .appointment-container {
        padding: 3rem 1rem;
    }
    h2 {
        font-weight: bold;
        text-align: center;
        margin-bottom: 2rem;
        color: #007a87;
    }
    .btn-primary {
        background-color: #007a87;
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #005f66;
        transform: translateY(-1px);
    }
    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-3px);
    }
    .card-title {
        color: #007a87;
        font-weight: 600;
    }
    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
    }
    .alert {
        border-radius: 8px;
    }
</style>

<!-- Incluye los íconos de Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

@endsection