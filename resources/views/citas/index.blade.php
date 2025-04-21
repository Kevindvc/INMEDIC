

@section('content')
<div class="container">
    <h1 class="mb-4">Mis Citas</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('citas.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Agendar Nueva Cita
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha y Hora</th>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Método</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($citas as $cita)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($cita->fecha_hora)->format('d/m/Y H:i') }}</td>
                        <td>{{ $cita->doctor->nombre ?? 'No asignado' }}</td>
                        <td>{{ $cita->especialidad }}</td>
                        <td>
                            @if($cita->metodo == 'videollamada')
                                <span class="badge bg-primary">Videollamada</span>
                            @elseif($cita->metodo == 'llamada')
                                <span class="badge bg-info">Llamada</span>
                            @else
                                <span class="badge bg-secondary">SMS</span>
                            @endif
                        </td>
                        <td>
                            @if($cita->estado == 'Pendiente')
                                <span class="badge bg-warning text-dark">Pendiente</span>
                            @elseif($cita->estado == 'Confirmada')
                                <span class="badge bg-success">Confirmada</span>
                            @elseif($cita->estado == 'Cancelada')
                                <span class="badge bg-danger">Cancelada</span>
                            @else
                                <span class="badge bg-secondary">Completada</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            @if($cita->estado == 'Pendiente')
                                <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('citas.cancelar', $cita->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-times"></i> Cancelar
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No tienes citas programadas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection