<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - Inmedic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/preguntas.css') }}">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container-fluid py-2">
        <a class="navbar-brand" href="/">
            <img src="/img/inmedic.png" alt="Inmedic Logo" width="180">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/landing">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Productos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/agendar-cita.html">Consultas Médicas</a></li>
                        <li><a class="dropdown-item" href="/historial.html">Historial de Citas</a></li>
                        <li><a class="dropdown-item" href="/doctores">Especialistas</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/contacto">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="/faq">Preguntas Frecuentes</a></li>
                <li class="nav-item"><a class="nav-link" href="/agendar-cita.html">Agenda tu cita aquí!</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Inicia Sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END -->

<!-- FAQ SECTION -->
<div class="container my-5">
    <h2 class="text-center mb-4">Preguntas Frecuentes (FAQ)</h2>
    <div class="accordion" id="faqAccordion">
        @php
            $preguntas = [
                '¿Qué es Inmedic?' => 'Inmedic es una plataforma de telemedicina que permite la comunicación segura y eficiente entre pacientes y profesionales de la salud.',
                '¿Cómo puedo registrarme en Inmedic?' => 'Puedes registrarte en nuestra plataforma a través de nuestro sitio web, proporcionando la información requerida y siguiendo los pasos de verificación.',
                '¿Es seguro compartir mis datos en Inmedic?' => 'Sí, en Inmedic aplicamos estrictas medidas de seguridad y cumplimos con las normativas vigentes en protección de datos para garantizar la privacidad y confidencialidad de tu información.',
                '¿Cuánto cuesta Inmedic?' => 'Los costos pueden variar según el tipo de consulta, el profesional de salud seleccionado o el plan mensual con el cual cuente el usuario. Te recomendamos revisar la información de precios en nuestra plataforma antes de agendar una cita.',
                '¿Cómo puedo agendar una consulta en Inmedic?' => 'Para agendar una consulta, solo debes iniciar sesión, dar clic en el botón “Agenda tu cita aquí”, luego seleccionar el profesional de salud de tu preferencia y el día según su disponibilidad.',
                '¿Qué tipos de profesionales de la salud están disponibles?' => 'En nuestra plataforma puedes encontrar médicos generales, especialistas, psicólogos y otros profesionales de la salud certificados.',
                '¿Cómo puedo cancelar o reprogramar una cita?' => 'Puedes cancelar o reprogramar una cita desde tu cuenta en la plataforma. Ten en cuenta que pueden aplicarse políticas de cancelación según el tiempo previo a la consulta.',
                '¿Qué dispositivos necesito para utilizar Inmedic?' => 'Puedes acceder a Inmedic desde cualquier computadora, tablet o smartphone con conexión a internet, un navegador web y una cámara funcional en caso de consultas por videollamada.',
                '¿Cómo puedo contactar al servicio de atención al cliente?' => 'Puedes comunicarte con nuestro equipo de soporte a través de nuestro correo electrónico info.inmedc@gmail.com o mediante el chat de la plataforma.',
                '¿Qué pasa si tengo problemas técnicos durante una consulta?' => 'Si experimentas problemas técnicos, te recomendamos verificar tu conexión a internet y reiniciar la aplicación. Si el problema persiste, puedes contactarnos a info.inmedc@gmail.com.'
            ];
        @endphp

        @foreach ($preguntas as $titulo => $respuesta)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $loop->index }}">
                <button class="accordion-button {{ !$loop->first ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}">
                    {{ $titulo }}
                </button>
            </h2>
            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    {{ $respuesta }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- FAQ END -->

<!-- FOOTER -->
<footer class="bg-light py-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3">
                <img src="/img/inmedic2 (2).png" alt="Inmedic" style="height: 160px;">
                <p class="mt-2">Cuidamos de vos, donde quiera que estés</p>
            </div>
            <div class="col-md-3">
                <h5>Acerca de Nosotros</h5>
                <a href="politica.html" class="d-block">Políticas de Privacidad</a>
                <a href="politica.html" class="d-block">Políticas de reembolso</a>
                <a href="politica.html" class="d-block">Términos y condiciones</a>
            </div>
            <div class="col-md-3">
                <h5>Productos</h5>
                <a href="agendar-cita.html" class="d-block">Agenda tu cita!</a>
                <a href="profesionales.html" class="d-block">Consultas con un profesional</a>
                <a href="historial.html" class="d-block">Historial de Citas</a>
            </div>
            <div class="col-md-3">
                <h5>Contáctanos</h5>
                <p>Whatsapp: 9712-1278</p>
                <p>Email: inmedichn@gmail.com</p>
            </div>
        </div>
        <hr>
        <p class="text-muted small">© 2025 Inmedic. Todos los derechos reservados.</p>
    </div>
</footer>
<!-- FOOTER END -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
