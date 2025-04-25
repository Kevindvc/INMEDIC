@extends('layouts.app')

@section('content')
<div class="appointment-box">
<h2>📅 Agenda tu cita</h2>
    
    @include('citas.partials.form', [
        'method' => 'POST',
        'action' => route('citas.store')
    ])
</div>
@endsection


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
        font-family:gugi;
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
