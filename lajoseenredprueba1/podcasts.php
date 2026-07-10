<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Podcasts · La Jose En Red</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎙️</text></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    <?php
$page_title       = 'La Jose En Red · Podcasts & Contenido Estudiantil';
$page_description = 'Foro estudiantil de podcasts, videos, debates y contenido audiovisual. ¡Tu voz, tu medio, tu comunidad!';
$page_og_image    = 'img/og/home.jpg';
// Nota: Si tu header.php ya incluye las etiquetas <html>, <head> o <body>, 
// podrías tener duplicados. Asegúrate de revisar ese archivo.
require_once 'header.php';
?>
    /* ── PAGE HERO ── */

  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="mainNav">
  <a href="index.php" class="nav-logo">
    <img src="img/logo.png" alt="Logo La Jose En Red">
    <div class="nav-logo-text">La Jose<span>en red</span></div>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="index.php"><span class="nav-icon">🏠</span> Inicio</a></li>
    <li><a href="podcasts.php" class="active"><span class="nav-icon">🎙️</span> Podcasts</a></li>
    <li><a href="videos.php"><span class="nav-icon">🎬</span> Videos</a></li>
    <li><a href="debate.php"><span class="nav-icon">💬</span> Debate</a></li>
    <li><a href="galeria.php"><span class="nav-icon">🖼️</span> Galería</a></li>
    <li><a href="bitacora.php"><span class="nav-icon">📓</span> Bitácora</a></li>
    <li><a href="nosotros.php"><span class="nav-icon">👥</span> Nosotros</a></li>
    <li><a href="comunidad.php" class="nav-cta">✨ Únete</a></li>
  </ul>
  <button class="nav-toggle" id="navToggle"><span></span><span></span><span></span></button>
</nav>

<!-- TICKER -->
<div class="ticker-wrap" style="margin-top:80px;">
  <div class="ticker-inner">
    <span>🎙️ Temporada 3 ya disponible</span>
    <span>🎧 +120 episodios publicados</span>
    <span>🔥 Nuevo: IA en el Aula EP.07</span>
    <span>📻 Escucha en Spotify & Apple Podcasts</span>
    <span>🎙️ Temporada 3 ya disponible</span>
    <span>🎧 +120 episodios publicados</span>
    <span>🔥 Nuevo: IA en el Aula EP.07</span>
    <span>📻 Escucha en Spotify & Apple Podcasts</span>
  </div>
</div>

<!-- PAGE HERO -->
<div class="page-hero">
  <span class="page-hero-icon">🎙️</span>
  <h1>Nuestros <span class="grad-text">Podcasts</span></h1>
  <p>Conversaciones auténticas, historias reales y debates apasionantes creados por estudiantes para el mundo.</p>

  <!-- FILTROS -->
  <div class="filter-bar">
    <button class="filter-btn active">🎯 Todos</button>
    <button class="filter-btn">💡 Tecnología</button>
    <button class="filter-btn">🌍 Sociedad</button>
    <button class="filter-btn">🎵 Música</button>
    <button class="filter-btn">🔬 Ciencia</button>
    <button class="filter-btn">🎨 Arte</button>
    <button class="filter-btn">🏃 Deportes</button>
    <button class="filter-btn">💰 Emprendimiento</button>
  </div>
</div>

<!-- REPRODUCTOR DESTACADO -->
<section style="padding: 0 2rem 3rem; position:relative; z-index:1;">
  <div style="text-align:center; margin-bottom:1.5rem;" class="fade-in">
    <span class="section-tag">🔥 Episodio Estrella</span>
  </div>
  <div class="featured-player fade-in">
    <div class="fp-banner">🎙️<div class="fp-wave"></div></div>
    <div class="fp-body">
      <span class="fp-tag">🔥 Ep. 7 · Temporada 3 · Tecnología</span>
      <h2 class="fp-title">IA en el Aula: ¿Amiga o Enemiga?</h2>
      <p class="fp-desc">Exploramos cómo la inteligencia artificial está transformando la educación colombiana. ¿Deben los colegios abrazar la IA o regularla? Tres estudiantes dan su perspectiva.</p>
      <div class="fp-controls">
        <button class="fp-play" id="featuredPlayBtn" onclick="toggleMiniPlayer()">▶</button>
        <div class="fp-progress-wrap">
          <input type="range" class="fp-progress" value="0" min="0" max="100" step="1">
          <div class="fp-time"><span>0:00</span><span>28:43</span></div>
        </div>
        <span style="font-size:1.4rem; cursor:pointer;" title="Descargar">⬇️</span>
        <span style="font-size:1.4rem; cursor:pointer;" title="Compartir">🔗</span>
      </div>
      <div class="fp-info-row">
        <div class="fp-stat">🎓 <strong>Juan C. & María V.</strong></div>
        <div class="fp-stat">📅 <strong>5 mayo 2026</strong></div>
        <div class="fp-stat">❤️ <strong>234 me gusta</strong></div>
        <div class="fp-stat">🎧 <strong>1,847 escuchas</strong></div>
        <div class="fp-stat">💬 <strong>28 comentarios</strong></div>
      </div>
    </div>
  </div>
</section>

<!-- TEMPORADAS -->
<section style="padding: 0 2rem 1rem; max-width:1140px; margin:0 auto; position:relative; z-index:1;">
  <div class="seasons-tabs">
    <button class="season-tab active">📦 Todos</button>
    <button class="season-tab">🌟 Temporada 3 (2026)</button>
    <button class="season-tab">🎯 Temporada 2 (2025)</button>
    <button class="season-tab">🚀 Temporada 1 (2024)</button>
  </div>
</section>

<!-- GRID DE PODCASTS -->
<section style="padding: 0 2rem 5rem; position:relative; z-index:1;">
  <div class="pods-grid">

    <!-- Card 1 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#ff2d78,#a020f0);">🧠<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">💡 Tecnología</span>
        <h3 class="podcast-title">IA en el Aula: ¿Amiga o Enemiga?</h3>
        <p class="podcast-desc">Tres estudiantes debaten el rol de la inteligencia artificial en la educación moderna.</p>
        <div class="podcast-meta">
          <span>🎓 Juan & María</span>
          <span class="meta-likes">❤️ 234</span>
          <span>⏱ 28:43</span>
        </div>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#00f5ff,#0060ff);">🌍<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">🌍 Sociedad</span>
        <h3 class="podcast-title">Jóvenes que Cambian el Mundo</h3>
        <p class="podcast-desc">Historias de emprendedores estudiantiles que están generando impacto en sus comunidades.</p>
        <div class="podcast-meta">
          <span>🎓 Equipo Jose</span>
          <span class="meta-likes">❤️ 189</span>
          <span>⏱ 35:10</span>
        </div>
      </div>
    </article>

    <!-- Card 3 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#39ff14,#00b894);">🎵<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">🎵 Música</span>
        <h3 class="podcast-title">Ritmos del Pacífico: Nuestra Herencia</h3>
        <p class="podcast-desc">Un viaje sonoro por la cultura musical del Pacífico colombiano.</p>
        <div class="podcast-meta">
          <span>🎓 Club Música</span>
          <span class="meta-likes">❤️ 311</span>
          <span>⏱ 42:05</span>
        </div>
      </div>
    </article>

    <!-- Card 4 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#ffe600,#ff6b00);">🔬<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">🔬 Ciencia</span>
        <h3 class="podcast-title">Experimentos que Cambian tu Mente</h3>
        <p class="podcast-desc">Ciencia explicada por estudiantes para estudiantes. Experimentos reales, resultados sorprendentes.</p>
        <div class="podcast-meta">
          <span>🎓 Club Ciencias</span>
          <span class="meta-likes">❤️ 145</span>
          <span>⏱ 31:20</span>
        </div>
      </div>
    </article>

    <!-- Card 5 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#bf5fff,#ff2d78);">💰<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">💰 Emprendimiento</span>
        <h3 class="podcast-title">Mi Primer Negocio a los 16</h3>
        <p class="podcast-desc">Historia real: cómo un estudiante de la Jose montó su primer emprendimiento con $50.000 pesos.</p>
        <div class="podcast-meta">
          <span>🎓 Sebastián R.</span>
          <span class="meta-likes">❤️ 278</span>
          <span>⏱ 45:00</span>
        </div>
      </div>
    </article>

    <!-- Card 6 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#ff9f43,#ee5a24);">🌱<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">🌱 Ambiental</span>
        <h3 class="podcast-title">El Planeta en Nuestras Manos</h3>
        <p class="podcast-desc">¿Qué pueden hacer los estudiantes por el medio ambiente? Respuestas con datos y acción.</p>
        <div class="podcast-meta">
          <span>🎓 EcoJose</span>
          <span class="meta-likes">❤️ 203</span>
          <span>⏱ 38:15</span>
        </div>
      </div>
    </article>

    <!-- Card 7 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#00f5ff,#39ff14);">📚<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">📚 Literatura</span>
        <h3 class="podcast-title">Los Libros que Todo Joven Debe Leer</h3>
        <p class="podcast-desc">Un club de lectura estudiantil recomienda los títulos que marcaron su vida.</p>
        <div class="podcast-meta">
          <span>🎓 Club Lectura</span>
          <span class="meta-likes">❤️ 167</span>
          <span>⏱ 24:05</span>
        </div>
      </div>
    </article>

    <!-- Card 8 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#a020f0,#00f5ff);">🎮<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">🎮 Cultura Digital</span>
        <h3 class="podcast-title">Videojuegos: ¿Arte o Entretenimiento?</h3>
        <p class="podcast-desc">Un debate apasionado sobre el valor cultural, artístico y educativo de los videojuegos.</p>
        <div class="podcast-meta">
          <span>🎓 GamersJose</span>
          <span class="meta-likes">❤️ 412</span>
          <span>⏱ 38:47</span>
        </div>
      </div>
    </article>

    <!-- Card 9 -->
    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad: linear-gradient(135deg,#ff2d78,#ffe600);">🏃<div class="play-btn-overlay" onclick="toggleMiniPlayer()">▶</div></div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">🏃 Deportes</span>
        <h3 class="podcast-title">Deporte, Mente y Rendimiento Escolar</h3>
        <p class="podcast-desc">¿Cómo el deporte mejora el rendimiento académico? Ciencia y testimonios reales.</p>
        <div class="podcast-meta">
          <span>🎓 Team Deportes</span>
          <span class="meta-likes">❤️ 198</span>
          <span>⏱ 33:22</span>
        </div>
      </div>
    </article>

  </div>

  <div class="load-more-wrap fade-in">
    <button class="btn-outline" style="margin-top:1rem;">⬇️ Cargar más episodios</button>
  </div>
</section>

<!-- MINI PLAYER -->
<div class="mini-player" id="miniPlayer">
  <div class="mp-thumb">🎙️</div>
  <div class="mp-info">
    <div class="mp-title">IA en el Aula: ¿Amiga o Enemiga?</div>
    <div class="mp-sub">Ep. 7 · Temporada 3 · 28:43</div>
  </div>
  <div class="mp-controls">
    <button>⏮</button>
    <button class="mp-play" id="mpPlayBtn">▶</button>
    <button>⏭</button>
    <button onclick="closeMiniPlayer()" style="color:var(--text-muted); font-size:.9rem;">✕</button>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-brand">
      <div class="logo-wrap"><img src="img/logo.png" alt="Logo"><span class="brand-name">La Jose En Red</span></div>
      <p>Foro estudiantil de podcasts y contenido audiovisual. Creado por jóvenes, para jóvenes.</p>
    </div>
    <div class="footer-col"><h4>Contenido</h4><ul>
      <li><a href="podcasts.php">🎙️ Podcasts</a></li>
      <li><a href="videos.php">🎬 Videos</a></li>
      <li><a href="debate.php">💬 Debates</a></li>
      <li><a href="galeria.php">🖼️ Galería</a></li>
    </ul></div>
    <div class="footer-col"><h4>Comunidad</h4><ul>
      <li><a href="nosotros.php">👥 Nosotros</a></li>
      <li><a href="bitacora.php">📓 Bitácora</a></li>
      <li><a href="comunidad.php">✨ Únete</a></li>
    </ul></div>
    <div class="footer-col"><h4>Síguenos</h4><ul>
      <li><a href="#">📺 YouTube</a></li>
      <li><a href="#">🎵 Spotify</a></li>
      <li><a href="#">📸 Instagram</a></li>
    </ul></div>
  </div>
  <div class="footer-bottom">
    <span>© 2026 La Jose En Red · Hecho con ❤️ por estudiantes</span>
    <div class="social-links">
      <a href="#">📺</a><a href="#">🎵</a><a href="#">📸</a><a href="#">🎬</a>
    </div>
  </div>
</footer>

<script>
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 30));
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');
  toggle.addEventListener('click', () => {
    links.classList.toggle('open');
    const bars = toggle.querySelectorAll('span');
    if(links.classList.contains('open')) {
      bars[0].style.cssText='transform:rotate(45deg) translate(5px,5px)';
      bars[1].style.cssText='opacity:0';
      bars[2].style.cssText='transform:rotate(-45deg) translate(5px,-5px)';
    } else { bars.forEach(b => b.style.cssText=''); }
  });
  const observer = new IntersectionObserver(entries => {
    entries.forEach((e,i) => {
      if(e.isIntersecting){ setTimeout(()=>e.target.classList.add('visible'), i*80); observer.unobserve(e.target); }
    });
  }, {threshold:.1});
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

  // Filter buttons
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });

  // Season tabs
  document.querySelectorAll('.season-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.season-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });

  // Mini player
  let playing = false;
  function toggleMiniPlayer() {
    document.getElementById('miniPlayer').classList.add('visible');
    playing = true;
    document.getElementById('mpPlayBtn').textContent = '⏸';
    document.getElementById('featuredPlayBtn').textContent = '⏸';
  }
  function closeMiniPlayer() {
    document.getElementById('miniPlayer').classList.remove('visible');
    playing = false;
    document.getElementById('mpPlayBtn').textContent = '▶';
    document.getElementById('featuredPlayBtn').textContent = '▶';
  }
  document.getElementById('mpPlayBtn').addEventListener('click', () => {
    playing = !playing;
    document.getElementById('mpPlayBtn').textContent = playing ? '⏸' : '▶';
  });
</script>
</body>
</html>