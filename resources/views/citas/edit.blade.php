@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cita</h1>
    
    @include('citas.partials.form', [
        'method' => 'PUT',
        'action' => route('citas.update', $cita),
        'cita' => $cita
    ])
</div>
@endsection