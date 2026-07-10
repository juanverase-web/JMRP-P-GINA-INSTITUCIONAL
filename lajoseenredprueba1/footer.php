<?php

?>

<!-- ╔══════════════════════════════════════════╗
     ║                 FOOTER                   ║
     ╚══════════════════════════════════════════╝ -->
<footer role="contentinfo">
  <div class="footer-inner">

    <!-- Marca -->
    <div class="footer-brand">
      <div class="logo-wrap">
        <img src="img/logo.png" alt="Logo La Jose En Red" width="42" height="42">
        <span class="brand-name">La Jose En Red</span>
      </div>
      <p>Foro estudiantil de podcasts y contenido audiovisual. Creado por jóvenes, para jóvenes.</p>
      <div class="social-links" style="margin-top:1rem;" aria-label="Redes Sociales">
        <a href="#" title="YouTube"   aria-label="Canal de YouTube">📺</a>
        <a href="#" title="Spotify"   aria-label="Spotify">🎵</a>
        <a href="#" title="Instagram" aria-label="Instagram">📸</a>
        <a href="#" title="TikTok"    aria-label="TikTok">🎬</a>
        <a href="#" title="WhatsApp"  aria-label="Grupo de WhatsApp">💬</a>
      </div>
    </div>

    <!-- Columna: Contenido -->
    <div class="footer-col">
      <h4>Contenido</h4>
      <ul>
        <li><a href="podcasts.php">🎙️ Podcasts</a></li>
        <li><a href="videos.php">🎬 Videos</a></li>
        <li><a href="debate.php">💬 Debates</a></li>
        <li><a href="galeria.php">🖼️ Galería</a></li>
        <li><a href="musica.php">🎵 Música</a></li>
        <li><a href="ciencia.php">🔬 Ciencia</a></li>
      </ul>
    </div>

    <!-- Columna: Comunidad -->
    <div class="footer-col">
      <h4>Comunidad</h4>
      <ul>
        <li><a href="nosotros.php">👥 Nosotros</a></li>
        <li><a href="bitacora.php">📓 Bitácora</a></li>
        <li><a href="comunidad.php">✨ Únete</a></li>
        <li><a href="contacto.php">📬 Contacto</a></li>
      </ul>
    </div>

    <!-- Columna: Recursos -->
    <div class="footer-col">
      <h4>Recursos</h4>
      <ul>
        <li><a href="guia.php">📖 Guía de Creadores</a></li>
        <li><a href="faq.php">❓ Preguntas Frecuentes</a></li>
        <li><a href="politica.php">🔒 Política de Privacidad</a></li>
        <li><a href="terminos.php">📄 Términos de Uso</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <span>© <?= date('Y') ?> La Jose En Red · Hecho con ❤️ por estudiantes</span>
    <span style="color:var(--text-muted);font-size:.75rem;">Institución Educativa La José · Copacabana, Antioquia</span>
  </div>
</footer>

<!-- ╔══════════════════════════════════════════╗
     ║    SCRIPTS GLOBALES (IntersectionObs.)   ║
     ╚══════════════════════════════════════════╝ -->
<script>
(function () {
  'use strict';

  /* ── Fade-in con Intersection Observer ── */
  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 90);
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.fade-in').forEach(el => io.observe(el));

  /* ── Bootstrap 5 JS (sin jQuery) ── */
  const bsScript = document.createElement('script');
  bsScript.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';
  bsScript.defer = true;
  document.body.appendChild(bsScript);
})();
</script>
</body>
</html>
