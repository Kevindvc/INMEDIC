<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profesionales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/profesionales.css') }}">
  
</head>
<body>

  <!--NAV BAR DE INMEDIC --> 


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="height: 120px;">
        <div>
            <img src="{{ asset('img/logo_final.svg') }}" alt="Logo Inmedic" style="width: 200px;">
        </div>
      <a class="navbar-brand" href="/landing" style="margin-left: 1200px; margin-top: 10px;">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
        <ul class="navbar-nav">
         <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="prod">
        Productos
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/agendar-cita.html">Consultas Medicas</a></li>
        <li><a class="dropdown-item" href="/historial.html">Historial de citas</a></li>
        <li><a class="dropdown-item" href="/doctores">Especialistas</a></li>
      </ul>
    </li>
          <li class="nav-item">
            <a class="nav-link" href="politica.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agendar-cita.html" id="agendar">Agenda tu cita aquí!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/login" id="login">Inicia Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--NAV BAR DE INMEDIC --> 





<div class="container py-5">
  <h2 class="text-center mb-5">Nuestros Profesionales</h2>
  <div class="row g-4 justify-content-center">

    <!-- Coleccion de doctores -->
    @foreach ($doctores as $doctor)
    <div class="col-md-6 col-lg-4">
      <div class="card card-profesional text-center p-3">
        <img src="{{ $doctor->imagen_url ?? 'https://i.imgur.com/qJLNDfX.png' }}" class="card-img-top" alt="Dr {{ $doctor->nombre }}">
        <div class="card-body">
          <h5 class="nombre-profesional">Dr {{ $doctor->nombre }}</h5>
          <p class="mb-1">Psicología Clínica</p>
          <p class="text-muted">Especialista en {{ $doctor->especialidad }} ademas de amplios conocimientos en cognitivo-conductual y manejo del estrés.</p>
          <a href="{{ route('doctores.show', $doctor->id) }}" class="btn btn-agendar">Ver Perfil</a>
        </div>
      </div>
    </div>
    @endforeach
    <!-- Fin de la coleccion de doctores -->
  </div>
</div>


       <!--FOOTER DE INMEDIC --> 
<div id="footer">
  <footer>
      <div>
          <div class="container text-center">
              <div class="row">
                <div class="col-6" style="color: black;">
                 <img src="img/inmedic2 (2).png" alt="inmedic.jpg" style="height: 200px;">
                 <p>Cuidamos de vos, donde quiera que estés</p>
                </div>
                <div class="col">
                  <h3>Acerca de Nosotros</h3>
                  <a href="politica.html">Políticas de Privacidad</a>
                  <a href="politica.html">Políticas de reembolso</a>
                  <a href="politica.html">Términos y condiciones</a>
                </div>
                <div class="col">
                  <h3>Productos</h3>
                  <a href="agendar-cita.html">Agenda tu cita!</a>
                  <a href="profesionales.html">Consultas con un profesional</a>
                  <a href="historial.html">Historial de Citas</a>
                </div>
                <div class="col">
                  <h3>Contáctanos</h3>
                  <b style="margin-top: 20px;">Whatsapp: 9712-1278</b>
                  <b>INFO: inmedichn@gmail.com</b>
                </div>
              </div>
            </div>
      </div>
      <p class="text-center">© 2025 Inmedic. Todos los derechos reservados.</p>
  </footer>

</div>

<!--FOOTER DE INMEDIC --> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
