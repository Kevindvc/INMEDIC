
@section('content')
<div class="container">
    <h1 class="mb-4">Agendar Nueva Cita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <div class="row">
            <!-- Selección de Doctor -->
            <div class="col-md-6 mb-3">
                <label for="doctor_id" class="form-label">Doctor</label>
                <select class="form-select" id="doctor_id" name="doctor_id" required>
                    <option value="">Seleccione un doctor</option>
                    @foreach($doctores as $doctor)
                        <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                            {{ $doctor->nombre }} - {{ $doctor->especialidad }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Especialidad -->
            <div class="col-md-6 mb-3">
                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad" 
                       value="{{ old('especialidad') }}" required>
            </div>
        </div>

        <div class="row">
            <!-- Fecha y Hora -->
            <div class="col-md-6 mb-3">
                <label for="fecha_hora" class="form-label">Fecha y Hora</label>
                <input type="datetime-local" class="form-control" id="fecha_hora" 
                       name="fecha_hora" value="{{ old('fecha_hora') }}" required>
            </div>

            <!-- Método de Consulta -->
            <div class="col-md-6 mb-3">
                <label for="metodo" class="form-label">Método de Consulta</label>
                <select class="form-select" id="metodo" name="metodo" required>
                    <option value="videollamada" {{ old('metodo') == 'videollamada' ? 'selected' : '' }}>Videollamada</option>
                    <option value="llamada" {{ old('metodo') == 'llamada' ? 'selected' : '' }}>Llamada</option>
                    <option value="SMS" {{ old('metodo') == 'SMS' ? 'selected' : '' }}>SMS</option>
                </select>
            </div>
        </div>

        <!-- Notas Adicionales -->
        <div class="mb-3">
            <label for="notas_adicionales" class="form-label">Notas Adicionales</label>
            <textarea class="form-control" id="notas_adicionales" name="notas_adicionales" 
                      rows="3">{{ old('notas_adicionales') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Agendar Cita</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection