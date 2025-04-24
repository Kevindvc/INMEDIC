<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Perfil del Profesional</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/especialidad.css') }}">
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
            <li><a class="dropdown-item" href="#">Consultas Medicas</a></li>
            <li><a class="dropdown-item" href="#">Historial de citas</a></li>
            <li><a class="dropdown-item" href="/doctores">Especialistas</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/faq">Preguntas Frecuentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="agendar">Agenda tu cita aquí!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/login" id="login">Inicia Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 
      <!--NAV BAR DE INMEDIC --> 

<div class="container my-5">
  <!-- Sección de Introducción -->
  <div class="bg-light p-4 rounded mb-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-10">
        <p class="nombre-doctor">Sobre el Dr. {{ $doctor->nombre }}</p>
        <p>Breve introducción sobre el doctor, su experiencia y sus metas en la plataforma.</p>
      </div>
      <div class="col-12 col-md-2 text-center">
        <img src="{{ $doctor->imagen_url ?? 'https://i.imgur.com/qJLNDfX.png' }}" 
             alt="Foto del doctor" 
             style="width: 200px; height: 200px; object-fit: cover; border-radius: 12px; border: 2px dashed #ccc; background-color: #f8f8f8;">
      </div>
    </div>
  </div>

  <!-- Servicios -->
  <div class="mb-4">
    <p class="seccion-titulo">Servicios</p>
    <div class="row g-4">

      <!-- Terapia Individual -->
      <div class="col-md-6 col-lg-3">
        <div class="card-servicio">
          <h6 class="text-primary">Terapia Individual</h6>
          <p>Hecha para interacciones uno a uno que se ajusten a tus necesidades específicas.</p>
          <ul class="ps-3">
            <li>Ansiedad</li>
            <li>Depresión</li>
            <li>Manejo del estrés</li>
          </ul>
        </div>
      </div>

      <!-- Terapia de Parejas -->
      <div class="col-md-6 col-lg-3">
        <div class="card-servicio">
          <h6 class="text-primary">Terapia de Parejas</h6>
          <p>Helping couples improve communication and strengthen their relationship.</p>
          <ul class="ps-3">
            <li>Problemas de comunicación</li>
            <li>Resolución de conflictos</li>
            <li>Retos de intimidad</li>
          </ul>
        </div>
      </div>

      <!-- Terapia de Grupo -->
      <div class="col-md-6 col-lg-3">
        <div class="card-servicio">
          <h6 class="text-primary">Terapia de Grupo</h6>
          <p>A supportive environment to share and learn from others.</p>
          <ul class="ps-3">
            <li>Grupo de ansiedad social</li>
            <li>Grupo de duelo</li>
          </ul>
        </div>
      </div>

      <!-- Terapia de Familia -->
      <div class="col-md-6 col-lg-3">
        <div class="card-servicio">
          <h6 class="text-primary">Terapia de Familia</h6>
          <p>Improving family dynamics and resolving conflicts.</p>
          <ul class="ps-3">
            <li>Conflictos Padre-Hijo</li>
            <li>Problemas familiares</li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <!-- Contacto -->
  <footer>
    <h5>Contáctame</h5>
    <p>{{ $doctor->email }}</p>
  </footer>
</div>


       <!--FOOTER DE INMEDIC --> 
       <div id="footer">
        <footer>
            <div>
                <div class="container text-center">
                    <div class="row">
                      <div class="col-6" style="color: black;">
                        <img src="{{ asset('img/logo_final.svg') }}" alt="Logo Inmedic" style="width: 200px;">
                       <p>Cuidamos de vos, donde quiera que estés</p>
                      </div>
                      <div class="col">
                        <h3>Acerca de Nosotros</h3>
                        <a href="#">Políticas de Privacidad</a>
                        <a href="#">Políticas de reembolso</a>
                        <a href="#">Términos y condiciones</a>
                      </div>
                      <div class="col">
                        <h3>Productos</h3>
                        <a href="">Agenda tu cita!</a>
                        <a href="">Consultas con un profesional</a>
                        <a href="">Historial de Citas</a>
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