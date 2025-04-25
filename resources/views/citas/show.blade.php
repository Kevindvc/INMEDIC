@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalle de Cita</h1>
    
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Dr. {{ $cita->doctor->nombre }}</h3>
                    <div class="mb-3">
                        <p><strong class="text-primary">📅 Fecha:</strong> {{ $cita->fecha_hora->format('d M Y H:i') }}</p>
                        <p><strong class="text-primary">🏥 Especialidad:</strong> {{ $cita->especialidad }}</p>
                        <p><strong class="text-primary">📱 Método:</strong> 
                            <span class="badge bg-info text-dark">{{ $cita->metodo }}</span>
                        </p>
                        <p><strong class="text-primary">🔄 Estado:</strong> 
                            <span class="badge bg-{{ $cita->estado == 'Cancelada' ? 'danger' : 'success' }}">
                                {{ $cita->estado }}
                            </span>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                @if($cita->metodo === 'videollamada' && $cita->enlace)
    <div class="mb-3">
        <a href="{{ $cita->enlace }}" 
           target="_blank"
           class="btn btn-success btn-lg mb-3 w-100">
           <i class="fas fa-video me-2"></i> Unirse a Videollamada
        </a>

        <div class="mb-3" style="width: 100%; height: 600px;">
            <iframe 
                allow="camera; microphone; fullscreen; display-capture"
                src="{{ $cita->enlace }}?jitsi_meet_external_api_id=0"
                style="width: 100%; height: 100%; border: 0;">
            </iframe>
        </div>
    </div>
@endif

</div>

            <!-- Acciones -->
            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('citas.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Volver
                </a>
                
                @if($cita->estado != 'Cancelada')
                <form action="{{ route('citas.cancelar', $cita) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-times-circle me-1"></i> Cancelar Cita
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function copiarEnlace() {
    const enlace = document.getElementById('enlace-videollamada');
    enlace.select();
    document.execCommand('copy');
    
    // Feedback visual
    const btn = event.currentTarget;
    btn.innerHTML = '<i class="fas fa-check"></i> Copiado!';
    setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-copy"></i>';
    }, 2000);
}
</script>
@endpush

@endsection