<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión · La Jose En Red</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🔑</text></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    .auth-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      min-height: 100vh;
      align-items: stretch;
    }

    .auth-left {
      background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(124, 58, 237, 0.08) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      position: relative;
      overflow: hidden;
    }

    .auth-left::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 20% 50%, rgba(6, 182, 212, 0.1) 0%, transparent 60%),
                  radial-gradient(circle at 80% 80%, rgba(37, 99, 235, 0.08) 0%, transparent 60%);
      pointer-events: none;
    }

    .auth-left-content {
      position: relative;
      z-index: 1;
      max-width: 400px;
      text-align: center;
    }

    .auth-left-content h1 {
      font-family: var(--font-head);
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .auth-left-content p {
      color: var(--text-muted);
      font-size: 1rem;
      margin-bottom: 2rem;
      line-height: 1.7;
    }

    .auth-left-icon {
      font-size: 5rem;
      margin-bottom: 1.5rem;
      animation: float-icon 3s ease-in-out infinite;
    }

    .auth-right {
      background: var(--bg-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      position: relative;
    }

    .auth-form {
      width: 100%;
      max-width: 380px;
    }

    .auth-form h2 {
      font-family: var(--font-head);
      font-size: 1.8rem;
      font-weight: 800;
      margin-bottom: 1rem;
      color: var(--text-main);
    }

    .auth-form p {
      color: var(--text-muted);
      font-size: 0.95rem;
      margin-bottom: 2rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.6rem;
      font-weight: 600;
      color: var(--text-main);
      font-size: 0.95rem;
    }

    .form-group input {
      width: 100%;
      padding: 0.8rem 1rem;
      background: rgba(255, 255, 255, 0.05);
      border: 1.5px solid var(--glass-border);
      border-radius: 8px;
      color: var(--text-main);
      font-size: 0.95rem;
      font-family: var(--font-body);
      transition: all var(--duration-fast) var(--ease);
    }

    .form-group input:focus {
      outline: none;
      border-color: var(--accent);
      background: rgba(6, 182, 212, 0.08);
      box-shadow: 0 0 12px rgba(6, 182, 212, 0.2);
    }

    .form-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      font-size: 0.9rem;
    }

    .form-options a {
      color: var(--accent);
      text-decoration: none;
      transition: color var(--duration-fast) var(--ease);
    }

    .form-options a:hover {
      color: var(--primary-light);
      text-decoration: underline;
    }

    .auth-button {
      width: 100%;
      padding: 0.9rem;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: #fff;
      font-family: var(--font-head);
      font-weight: 700;
      font-size: 0.95rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all var(--duration-fast) var(--ease);
      margin-bottom: 1rem;
    }

    .auth-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
    }

    .auth-divider {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin: 1.5rem 0;
      color: var(--text-muted);
      font-size: 0.85rem;
    }

    .auth-divider::before,
    .auth-divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--glass-border);
    }

    .auth-links {
      text-align: center;
    }

    .auth-links p {
      color: var(--text-muted);
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }

    .auth-links a {
      color: var(--accent);
      text-decoration: none;
      font-weight: 700;
      transition: color var(--duration-fast) var(--ease);
    }

    .auth-links a:hover {
      color: var(--primary-light);
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .auth-container {
        grid-template-columns: 1fr;
      }

      .auth-left {
        padding: 2rem;
        min-height: 200px;
      }

      .auth-left-content h1 {
        font-size: 1.8rem;
      }

      .auth-right {
        padding: 2rem 1rem;
      }

      .auth-form {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="auth-container">
    <!-- Izquierda: Información -->
    <div class="auth-left">
      <div class="auth-left-content">
        <div class="auth-left-icon">🎙️</div>
        <h1>La Jose<br><span style="color: var(--accent);">en red</span></h1>
        <p>Accede a tu comunidad estudiantil. Comparte podcasts, videos, debates y mucho más.</p>
      </div>
    </div>

    <!-- Derecha: Formulario -->
    <div class="auth-right">
      <form class="auth-form" action="validarinicio.php" method="POST">
        <h2>Iniciar Sesión</h2>
        <p>Bienvenido de vuelta</p>

        <div class="form-group">
          <label for="usuario">Usuario o Email</label>
          <input type="text" id="usuario" name="Usuario" placeholder="usuario@ejemplo.com" required>
        </div>

        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="Password" placeholder="••••••••" required>
        </div>

        <div class="form-options">
          <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer; font-weight: normal;">
            <input type="checkbox" style="width: 16px; height: 16px; cursor: pointer;">
            Recuérdame
          </label>
          <a href="recordarpass.php">¿Olvidaste tu contraseña?</a>
        </div>

        <button type="submit" class="auth-button">Iniciar Sesión</button>

        <div class="auth-divider">o</div>

        <div class="auth-links">
          <p>¿No tienes cuenta?</p>
          <a href="registro.php">Crear una cuenta nueva</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>