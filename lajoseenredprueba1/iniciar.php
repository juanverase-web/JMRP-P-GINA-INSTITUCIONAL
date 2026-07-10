<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Jose En Red · Podcasts & Contenido Estudiantil</title>
  <meta name="description" content="Foro estudiantil de podcasts, videos, debates y contenido audiovisual. ¡Tu voz, tu medio, tu comunidad!">
  <meta property="og:type" content="website">
  <meta property="og:title" content="La Jose En Red · Podcasts & Contenido Estudiantil">
  <meta property="og:description" content="Foro estudiantil de podcasts, videos, debates y contenido audiovisual. ¡Tu voz, tu medio, tu comunidad!">
  <meta property="og:image" content="img/og/home.jpg">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
   <?php
$page_title       = 'La Jose En Red · Podcasts & Contenido Estudiantil';
$page_description = 'Foro estudiantil de podcasts, videos, debates y contenido audiovisual. ¡Tu voz, tu medio, tu comunidad!';
$page_og_image    = 'img/og/home.jpg';
// Nota: Si tu header.php ya incluye las etiquetas <html>, <head> o <body>, 
// podrías tener duplicados. Asegúrate de revisar ese archivo.
require_once 'header.php';
?>
    <main class="hero-section">
        <div class="hero-content">
            <form action="validarinicio.php" method="post">
                <h2>Iniciar Sesión</h2>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="Usuario" required>
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="Password" required>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    <a href="recordarpass.php">¿Olvidaste tu contraseña?</a>
                    <a href="registro.php">Registrarse</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>