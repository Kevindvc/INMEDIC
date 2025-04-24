<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Bienvenido</title>
</head>
<body id="body">
    
    <!--NAV BAR DE INMEDIC --> 


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="height: 120px;">
            <div>
                <img src="img/inmedic.png" alt="inmedic.png" width="200px;">
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
                <a class="nav-link" href="/nosotros">Nosotros</a>
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
 
      
      <main>
        <div class="row text-center" id="seccion-1">
            <div class="col-2"></div>
            
         <div class="col-4">
            <div class="row">
                <div class="col-12">
                <div class="justify-content-center" id="consulta">Consulta a un médico desde la comodidad de tu hogar</div>
                <div class="justify-content-center" id="atencion">Atención médica en línea con doctores certificados. Recibe diagnósticos, recetas y orientación profesional en minutos.</div>
                <button type="button" class="btn btn-primary btn-lg" id="boton-agendar">Agenda Consulta</button>    
            </div>
           
            </div>
         </div>
         <div class="col-4">
            <img src="/img/psicologa.jpg" alt="Psicóloga.jpg" id="img-psych">
         </div> 


        </div>

        <div class="row">
            <img src="/img/servicios.png" alt="img.png" id="servicios">
        </div>

        <div class="row">
            <img src="/img/telemedicina.png" alt="img.png" id="telemedicina">
        </div>

        <div class="row">
            <img src="/img/especialistas.png" alt="img.png" id="especialistas">
        </div>
      </main>

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

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>