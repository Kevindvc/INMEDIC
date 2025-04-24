<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Inmedic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
                <li class="nav-item"><a class="nav-link" href="/nosotros">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="/faq">Preguntas Frecuentes</a></li>
                <li class="nav-item"><a class="nav-link" href="/agendar-cita.html">Agenda tu cita aquí!</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Inicia Sesión</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container py-5">
        <!-- Sección principal -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('img/nosotros.jpg') }}" alt="Equipo Inmedic" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">¿Quiénes somos?</h1>
                <p class="lead mt-3">
                    En <strong>Inmedic</strong>, somos una plataforma de <strong>telemedicina</strong> dedicada a ofrecer atención médica accesible, segura y confiable desde la comodidad de tu hogar. Nuestro compromiso es transformar la experiencia de salud a través de la tecnología.
                </p>
            </div>
        </div>

        <!-- Valores destacados -->
        <div class="row text-center mb-5">
            <div class="col-md-4">
                <i class="bi bi-heart-pulse-fill fs-1 text-primary"></i>
                <h4 class="mt-3">Atención de calidad</h4>
                <p>Contamos con médicos especialistas listos para ayudarte en cualquier momento.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-globe2 fs-1 text-success"></i>
                <h4 class="mt-3">Alcance nacional</h4>
                <p>Conectamos pacientes con doctores en todo el país, sin importar dónde se encuentren.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-shield-lock-fill fs-1 text-danger"></i>
                <h4 class="mt-3">Seguridad y privacidad</h4>
                <p>Tus datos están protegidos bajo estrictas políticas de confidencialidad y cifrado.</p>
            </div>
        </div>

        <!-- Misión -->
        <div class="text-center mt-5">
            <h2 class="fw-bold">Nuestra misión</h2>
            <p class="lead">
                Democratizar el acceso a la salud con soluciones tecnológicas que acerquen a pacientes y profesionales de manera rápida, humana y efectiva.
            </p>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
