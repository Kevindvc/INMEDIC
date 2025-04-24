<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inmedic - Registro / Inicio de sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  
</head>
<body>
  <div class="auth-container">
    <!-- Lado izquierdo -->
    <div class="auth-left text-center">
      <a href="/landing"><img src="/img/inmedic.png" alt="Logo Inmedic" class="mb-4" style="width: 300px; margin-left: -100px; margin-top: 80px;"></a>
      <img src="/img/210111-aca01-f2-terapia-en-linea.jpg" alt="Imagen médica" class="auth-image mt-auto imagen-medica">
    </div>

    <!-- Lado derecho -->
    <div class="auth-right">
      <div class="form-container">
        <ul class="nav nav-tabs justify-content-center" id="authTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">
              Registrarse
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">
              Iniciar sesión
            </button>
          </li>
        </ul>

        <div class="tab-content" id="authTabContent" style="width: 500px;">
          <!-- Registro -->
          <div class="tab-pane fade show active" id="register" role="tabpanel">
            <form>
              <input type="text" class="form-control mb-3" placeholder="Nombre completo" required>
              <input type="email" class="form-control mb-3" placeholder="Correo Electrónico" required>
              <input type="tel" class="form-control mb-3" placeholder="Número Telefónico" required>
              <input type="date" class="form-control mb-3" placeholder="Fecha de Nacimiento" required>
              <input type="password" class="form-control mb-3" placeholder="Contraseña" required>
              <input type="text" class="form-control mb-3" placeholder="Alergias">
              <input type="text" class="form-control mb-3" placeholder="Patologias">
              <input type="text" class="form-control mb-3" placeholder="Alergias">
              <select class="form-control mb-3" aria-label="Default select example">
                <option selected>Plan</option>
                <option value="1">Básico</option>
                <option value="2">Premium</option>
                <option value="3">Consulta Única</option>
              </select>
              <select class="form-control mb-3" aria-label="Default select example">
                <option selected>Género</option>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
                <option value="3">Prefiero no contestar</option>
              </select>

              <div class="form-check mb-3 text-start">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                  Acepto términos y condiciones
                </label>
              </div>

              <button type="submit" class="btn btn-custom w-100">Registrarte</button>
            </form>
          </div>

          <!-- Inicio de sesión -->
          <div class="tab-pane fade" id="login" role="tabpanel">
            <form>
              <input type="email" class="form-control mb-3" placeholder="Correo" required>
              <input type="password" class="form-control mb-4" placeholder="Contraseña" required>
              <a href="/password/forgot">¿Olvidaste tu contraseña?</a>
              <button type="submit" class="btn btn-custom w-100 mb-3">Iniciar sesión</button>

              <button type="button" class="btn btn-facebook w-100 mb-2 social-btn">
                <i class="bi bi-facebook"></i> Iniciar sesión con Facebook
              </button>
              <button type="button" class="btn btn-google w-100 mb-2 social-btn">
                <img src="https://img.icons8.com/color/16/000000/google-logo.png"/> Iniciar sesión con Google
              </button>
              <button type="button" class="btn btn-apple w-100 social-btn">
                <i class="bi bi-apple"></i> Iniciar sesión con Apple
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap & Icons -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
