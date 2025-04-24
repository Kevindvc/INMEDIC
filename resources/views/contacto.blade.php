<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
    <title>Document</title>
</head>
<body id="body">
    


 <!--NAV BAR DE INMEDIC --> 


 <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="height: 120px;">
      <div>
        <img src="img/inmedic.png" alt="inmedic.png" width="200px;">
      </div>
      <a class="navbar-brand" href="#" style="margin-left: 1200px; margin-top: 10px;">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <!-- Nuevo botón Doctores -->
          <li class="nav-item">
            <a class="nav-link" href="/doctores">Doctores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contacto">Nosotros</a>
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

  <main class="bg-light">

    <div class="container py-5">
      <div class="row contact-card bg-white">
        <!-- Mapa -->
        <div class="col-md-6 p-0">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19896.894306455656!2d-0.16253714249224124!3d51.506178713087464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760524e4d4f28b%3A0x94559a6cfcf0053d!2sHyde%20Park!5e0!3m2!1ses-419!2suk!4v1686000000000!5m2!1ses-419!2suk" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
        </div>
  
        <!-- Formulario -->
        <div class="col-md-6 form-box">
          <h5 class="fw-bold">Ponte en contacto con nosotros</h5>
          <p class="text-muted mb-4">¡Estamos aquí para ayudarte! ¿Cómo podemos ayudarte?</p>
          <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="correo" placeholder="correo@ejemplo.com">
            </div>
            <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
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


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>