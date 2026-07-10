<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Videos · La Jose En Red</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎬</text></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    .page-hero { padding: calc(var(--nav-h) + 4rem) 2rem 3rem; text-align:center; position:relative; z-index:1; }
    .page-hero-icon { font-size:4.5rem; display:block; margin-bottom:1rem; animation: bounceIn .6s ease both; }
    @keyframes bounceIn { 0%{transform:scale(.5);opacity:0} 70%{transform:scale(1.1);opacity:1} 100%{transform:scale(1)} }
    .page-hero h1 { font-family:var(--font-head); font-size:clamp(2rem,5vw,3.8rem); font-weight:800; margin-bottom:.8rem; }
    .page-hero p { color:var(--text-muted); font-size:1.05rem; max-width:540px; margin:0 auto 2rem; }

    .filter-bar { display:flex; flex-wrap:wrap; gap:.6rem; justify-content:center; margin-bottom:3rem; }
    .filter-btn { display:inline-flex; align-items:center; gap:.4rem; padding:.5rem 1.2rem; border-radius:50px; font-family:var(--font-body); font-size:.85rem; font-weight:700; border:1.5px solid var(--glass-border); background:var(--dark-card); color:var(--text-muted); cursor:pointer; transition:all .25s; backdrop-filter:blur(10px); }
    .filter-btn:hover, .filter-btn.active { border-color:var(--neon-cyan); color:var(--neon-cyan); background:rgba(0,245,255,.1); box-shadow:0 0 16px rgba(0,245,255,.2); }

    /* VIDEO HERO */
    .video-hero {
      max-width: 960px;
      margin: 0 auto 4rem;
      border-radius: 24px;
      overflow: hidden;
      position: relative;
      background: #000;
      box-shadow: 0 30px 80px rgba(0,0,0,.5), 0 0 60px rgba(0,245,255,.08);
      border: 1px solid rgba(0,245,255,.2);
    }
    .vh-screen {
      aspect-ratio: 16/9;
      background: linear-gradient(135deg, #0a0a2e 0%, #00f5ff22 50%, #0a0a2e 100%);
      display: flex; align-items: center; justify-content: center;
      position: relative;
      overflow: hidden;
      cursor: pointer;
    }
    .vh-screen::before {
      content: '';
      position: absolute; inset: 0;
      background: repeating-linear-gradient(0deg, transparent, transparent 3px, rgba(0,245,255,.03) 3px, rgba(0,245,255,.03) 4px);
      animation: scanline 8s linear infinite;
    }
    @keyframes scanline { 0%{background-position:0 0} 100%{background-position:0 100%} }
    .vh-emoji { font-size: 8rem; z-index:1; animation: float 3s ease-in-out infinite alternate; }
    @keyframes float { from{transform:translateY(-10px)} to{transform:translateY(10px)} }
    .vh-play {
      position: absolute; z-index:2;
      width: 80px; height: 80px;
      border-radius: 50%;
      background: rgba(0,245,255,.2);
      backdrop-filter: blur(10px);
      border: 2px solid var(--neon-cyan);
      display: flex; align-items:center; justify-content:center;
      font-size: 2.5rem;
      transition: all .3s;
      box-shadow: 0 0 40px rgba(0,245,255,.4);
    }
    .vh-play:hover { background:rgba(0,245,255,.35); transform:scale(1.1); box-shadow:0 0 60px rgba(0,245,255,.6); }
    .vh-overlay {
      position: absolute; bottom:0; left:0; right:0;
      background: linear-gradient(to top, rgba(8,12,20,.95) 0%, transparent 100%);
      padding: 1.5rem;
      z-index: 2;
    }
    .vh-label { font-size:.72rem; font-weight:800; letter-spacing:.15em; text-transform:uppercase; color:var(--neon-cyan); margin-bottom:.3rem; display:block; }
    .vh-title { font-family:var(--font-head); font-size:1.4rem; font-weight:800; }
    .vh-meta { font-size:.8rem; color:var(--text-muted); margin-top:.3rem; display:flex; gap:1.5rem; flex-wrap:wrap; }

    /* GRID VIDEOS */
    .videos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.5rem;
      max-width: 1100px;
      margin: 0 auto;
    }
    .video-card {
      background: var(--dark-card);
      border: 1px solid var(--glass-border);
      border-radius: 20px;
      overflow: hidden;
      transition: all .35s cubic-bezier(.4,0,.2,1);
      backdrop-filter: blur(12px);
      cursor: pointer;
    }
    .video-card:hover { transform: translateY(-6px); border-color: rgba(0,245,255,.4); box-shadow: 0 24px 50px rgba(0,0,0,.4), 0 0 40px rgba(0,245,255,.1); }
    .vc-thumb {
      aspect-ratio: 16/9;
      position: relative;
      overflow: hidden;
      background: var(--g, linear-gradient(135deg,#00f5ff,#0060ff));
      display: flex; align-items:center; justify-content:center;
      font-size: 4rem;
    }
    .vc-duration {
      position: absolute; bottom:.5rem; right:.5rem;
      background: rgba(0,0,0,.85);
      color: #fff;
      font-size: .72rem;
      font-weight: 700;
      padding: .2rem .5rem;
      border-radius: 4px;
      font-family: var(--font-head);
    }
    .vc-views-badge {
      position: absolute; top:.5rem; left:.5rem;
      background: rgba(0,245,255,.2);
      backdrop-filter: blur(6px);
      color: var(--neon-cyan);
      font-size: .68rem;
      font-weight: 800;
      padding: .2rem .6rem;
      border-radius: 50px;
      border: 1px solid rgba(0,245,255,.3);
      text-transform: uppercase;
      letter-spacing: .08em;
    }
    .vc-body { padding: 1.2rem; }
    .vc-tag { font-size:.7rem; font-weight:800; letter-spacing:.1em; text-transform:uppercase; color:var(--neon-cyan); background:rgba(0,245,255,.1); border:1px solid rgba(0,245,255,.25); padding:.2rem .7rem; border-radius:50px; display:inline-block; margin-bottom:.7rem; }
    .vc-title { font-family:var(--font-head); font-size:1rem; font-weight:700; margin-bottom:.4rem; line-height:1.3; }
    .vc-desc { font-size:.83rem; color:var(--text-muted); line-height:1.5; margin-bottom:.9rem; }
    .vc-meta { display:flex; justify-content:space-between; align-items:center; font-size:.78rem; color:var(--text-muted); font-weight:600; }
    .vc-likes { color:var(--neon-pink); display:flex; align-items:center; gap:.3rem; }

    /* LIVE BADGE */
    .live-badge {
      display: inline-flex; align-items:center; gap:.4rem;
      background: rgba(255,45,120,.15);
      border: 1px solid rgba(255,45,120,.4);
      border-radius: 50px;
      padding: .3rem .9rem;
      font-size:.75rem; font-weight:800;
      color: var(--neon-pink);
      letter-spacing:.08em; text-transform:uppercase;
    }
    .live-dot { width:8px; height:8px; background:var(--neon-pink); border-radius:50%; animation:blink 1s ease-in-out infinite; }
    @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.2} }

    /* PRÓXIMOS EN VIVO */
    .live-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:1.2rem; max-width:1100px; margin:0 auto; }
    .live-card {
      background:var(--dark-card); border:1px solid rgba(255,45,120,.2); border-radius:18px;
      padding:1.5rem; backdrop-filter:blur(12px); transition:all .3s;
      display:flex; flex-direction:column; gap:.8rem;
    }
    .live-card:hover { border-color:rgba(255,45,120,.5); transform:translateY(-4px); box-shadow:0 16px 40px rgba(0,0,0,.3), 0 0 30px rgba(255,45,120,.1); }
    .live-card .lc-icon { font-size:2.5rem; }
    .live-card .lc-title { font-family:var(--font-head); font-size:1rem; font-weight:700; }
    .live-card .lc-time { font-size:.8rem; color:var(--neon-cyan); font-weight:700; }
    .live-card .lc-desc { font-size:.83rem; color:var(--text-muted); }
    .live-card .lc-notify { padding:.4rem 1rem; border-radius:50px; font-size:.8rem; font-weight:700; background:rgba(255,45,120,.12); border:1px solid rgba(255,45,120,.3); color:var(--neon-pink); cursor:pointer; width:fit-content; transition:all .25s; }
    .live-card .lc-notify:hover { background:rgba(255,45,120,.25); }
  </style>
</head>
<body>
<nav class="navbar" id="mainNav">
  <a href="index.php" class="nav-logo"><img src="img/logo.png" alt="Logo"><div class="nav-logo-text">La Jose<span>en red</span></div></a>
  <ul class="nav-links" id="navLinks">
    <li><a href="index.php"><span class="nav-icon">🏠</span> Inicio</a></li>
    <li><a href="podcasts.php"><span class="nav-icon">🎙️</span> Podcasts</a></li>
    <li><a href="videos.php" class="active"><span class="nav-icon">🎬</span> Videos</a></li>
    <li><a href="debate.php"><span class="nav-icon">💬</span> Debate</a></li>
    <li><a href="galeria.php"><span class="nav-icon">🖼️</span> Galería</a></li>
    <li><a href="bitacora.php"><span class="nav-icon">📓</span> Bitácora</a></li>
    <li><a href="nosotros.php"><span class="nav-icon">👥</span> Nosotros</a></li>
    <li><a href="comunidad.php" class="nav-cta">✨ Únete</a></li>
  </ul>
  <button class="nav-toggle" id="navToggle"><span></span><span></span><span></span></button>
</nav>

<div class="ticker-wrap" style="margin-top:80px;">
  <div class="ticker-inner">
    <span>🎬 Nuevo video cada viernes</span><span>📡 Transmisión en vivo — viernes 4pm</span>
    <span>🏆 Concurso de cortometrajes abierto</span><span>🎥 +38 videos publicados</span>
    <span>🎬 Nuevo video cada viernes</span><span>📡 Transmisión en vivo — viernes 4pm</span>
    <span>🏆 Concurso de cortometrajes abierto</span><span>🎥 +38 videos publicados</span>
  </div>
</div>

<div class="page-hero">
  <span class="page-hero-icon">🎬</span>
  <h1>Canal de <span class="grad-text">Videos</span></h1>
  <p>Documentales, tutoriales, cortometrajes y reportajes creados por los estudiantes de La Jose En Red.</p>
  <div class="filter-bar">
    <button class="filter-btn active">🎯 Todos</button>
    <button class="filter-btn">🎥 Documentales</button>
    <button class="filter-btn">🎓 Tutoriales</button>
    <button class="filter-btn">🎭 Cortometrajes</button>
    <button class="filter-btn">📰 Reportajes</button>
    <button class="filter-btn">📡 En Vivo</button>
    <button class="filter-btn">🎤 Entrevistas</button>
  </div>
</div>

<!-- VIDEO DESTACADO -->
<section style="padding:0 2rem 3rem; position:relative; z-index:1;">
  <div style="text-align:center; margin-bottom:1.5rem;" class="fade-in">
    <span class="section-tag">⭐ Video Destacado</span>
  </div>
  <div class="video-hero fade-in">
    <div class="vh-screen">
      <div class="vh-emoji">🌍</div>
      <div class="vh-play">▶</div>
      <div class="vh-overlay">
        <span class="vh-label">🎥 Documental · 18 min</span>
        <div class="vh-title">El Río que Nos Habla: Medio Ambiente en Antioquia</div>
        <div class="vh-meta">
          <span>📅 3 mayo 2026</span>
          <span>👁️ 3,421 vistas</span>
          <span>❤️ 287 me gusta</span>
          <span>💬 45 comentarios</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRÓXIMOS EN VIVO -->
<section style="position:relative; z-index:1; padding:0 2rem 4rem;">
  <div class="section-header fade-in">
    <span class="section-tag"><span class="live-badge"><span class="live-dot"></span>En Vivo</span></span>
    <h2 class="section-title" style="margin-top:.8rem;">Próximas <span class="highlight">Transmisiones</span></h2>
    <p class="section-desc">Activa la notificación y no te pierdas ningún live de La Jose En Red.</p>
  </div>
  <div class="live-grid">
    <div class="live-card fade-in">
      <div class="lc-icon">🎤</div>
      <div class="lc-title">Entrevista: Alcalde del Futuro</div>
      <div class="lc-time">📅 Viernes 9 mayo · 4:00 PM</div>
      <div class="lc-desc">Estudiantes entrevistan a un experto en gobierno juvenil y participación ciudadana.</div>
      <button class="lc-notify">🔔 Notificarme</button>
    </div>
    <div class="live-card fade-in">
      <div class="lc-icon">🔬</div>
      <div class="lc-title">Lab en Vivo: Reacciones Químicas</div>
      <div class="lc-time">📅 Martes 13 mayo · 3:00 PM</div>
      <div class="lc-desc">El club de ciencias realiza experimentos en tiempo real. ¡Tú puedes sugerir qué hacer!</div>
      <button class="lc-notify">🔔 Notificarme</button>
    </div>
    <div class="live-card fade-in">
      <div class="lc-icon">🎵</div>
      <div class="lc-title">Concierto Estudiantil Acústico</div>
      <div class="lc-time">📅 Jueves 15 mayo · 5:00 PM</div>
      <div class="lc-desc">Los talentes musicales de la institución se presentan en vivo desde el auditorio.</div>
      <button class="lc-notify">🔔 Notificarme</button>
    </div>
  </div>
</section>

<!-- GRID DE VIDEOS -->
<section style="padding:0 2rem 5rem; position:relative; z-index:1;">
  <div class="section-header fade-in">
    <span class="section-tag">🎬 Biblioteca</span>
    <h2 class="section-title">Todos los <span class="highlight">Videos</span></h2>
  </div>
  <div class="videos-grid">

    <div class="video-card fade-in">
      <div class="vc-thumb" style="--g:linear-gradient(135deg,#ff2d78,#a020f0)">
        🎭 <span class="vc-duration">12:34</span><span class="vc-views-badge">🔥 Tendencia</span>
      </div>
      <div class="vc-body">
        <span class="vc-tag">🎭 Cortometraje</span>
        <h3 class="vc-title">La Última Tarde de Clases</h3>
        <p class="vc-desc">Un cortometraje emotivo sobre la amistad, los sueños y el fin del bachillerato.</p>
        <div class="vc-meta"><span>🎓 Semillero Cine</span><span class="vc-likes">❤️ 567</span><span>👁️ 4.2K</span></div>
      </div>
    </div>

    <div class="video-card fade-in">
      <div class="vc-thumb" style="--g:linear-gradient(135deg,#00f5ff,#0060ff)">
        🌍 <span class="vc-duration">18:21</span>
      </div>
      <div class="vc-body">
        <span class="vc-tag">🎥 Documental</span>
        <h3 class="vc-title">El Río que Nos Habla</h3>
        <p class="vc-desc">Un recorrido por los ríos de Antioquia y su situación ambiental actual.</p>
        <div class="vc-meta"><span>🎓 EcoJose</span><span class="vc-likes">❤️ 287</span><span>👁️ 3.4K</span></div>
      </div>
    </div>

    <div class="video-card fade-in">
      <div class="vc-thumb" style="--g:linear-gradient(135deg,#ffe600,#ff6b00)">
        🎓 <span class="vc-duration">08:15</span>
      </div>
      <div class="vc-body">
        <span class="vc-tag">🎓 Tutorial</span>
        <h3 class="vc-title">Cómo Estudiar para el ICFES en 30 Días</h3>
        <p class="vc-desc">Técnicas de estudio probadas por estudiantes que sacaron más de 400 puntos.</p>
        <div class="vc-meta"><span>🎓 Daniela M.</span><span class="vc-likes">❤️ 445</span><span>👁️ 6.1K</span></div>
      </div>
    </div>

    <div class="video-card fade-in">
      <div class="vc-thumb" style="--g:linear-gradient(135deg,#39ff14,#00b894)">
        🎤 <span class="vc-duration">22:40</span>
      </div>
      <div class="vc-body">
        <span class="vc-tag">🎤 Entrevista</span>
        <h3 class="vc-title">Hablando con el Profe: Vida más allá del Aula</h3>
        <p class="vc-desc">Entrevista íntima con docentes que revelan sus pasiones fuera de la escuela.</p>
        <div class="vc-meta"><span>🎓 Reporteros Jose</span><span class="vc-likes">❤️ 203</span><span>👁️ 2.8K</span></div>
      </div>
    </div>

    <div class="video-card fade-in">
      <div class="vc-thumb" style="--g:linear-gradient(135deg,#bf5fff,#ff2d78)">
        📰 <span class="vc-duration">14:09</span>
      </div>
      <div class="vc-body">
        <span class="vc-tag">📰 Reportaje</span>
        <h3 class="vc-title">Bullying Cero: Voces que Importan</h3>
        <p class="vc-desc">Estudiantes cuentan sus experiencias y proponen soluciones para un ambiente escolar sano.</p>
        <div class="vc-meta"><span>🎓 Prensa Escolar</span><span class="vc-likes">❤️ 389</span><span>👁️ 5.0K</span></div>
      </div>
    </div>

    <div class="video-card fade-in">
      <div class="vc-thumb" style="--g:linear-gradient(135deg,#ff9f43,#ee5a24)">
        🍳 <span class="vc-duration">11:30</span>
      </div>
      <div class="vc-body">
        <span class="vc-tag">🎓 Tutorial</span>
        <h3 class="vc-title">Cocina Fácil para Estudiantes</h3>
        <p class="vc-desc">Recetas saludables, económicas y deliciosas que cualquier joven puede preparar.</p>
        <div class="vc-meta"><span>🎓 Club Gastronomía</span><span class="vc-likes">❤️ 178</span><span>👁️ 2.1K</span></div>
      </div>
    </div>

  </div>
  <div style="text-align:center; margin-top:3rem;" class="fade-in">
    <a href="#" class="btn-outline">⬇️ Ver más videos</a>
  </div>
</section>

<footer>
  <div class="footer-inner">
    <div class="footer-brand"><div class="logo-wrap"><img src="img/logo.png" alt="Logo"><span class="brand-name">La Jose En Red</span></div><p>Foro estudiantil audiovisual. Creado por jóvenes, para jóvenes.</p></div>
    <div class="footer-col"><h4>Contenido</h4><ul><li><a href="podcasts.php">🎙️ Podcasts</a></li><li><a href="videos.php">🎬 Videos</a></li><li><a href="debate.php">💬 Debates</a></li><li><a href="galeria.php">🖼️ Galería</a></li></ul></div>
    <div class="footer-col"><h4>Comunidad</h4><ul><li><a href="nosotros.php">👥 Nosotros</a></li><li><a href="bitacora.php">📓 Bitácora</a></li><li><a href="comunidad.php">✨ Únete</a></li></ul></div>
    <div class="footer-col"><h4>Síguenos</h4><ul><li><a href="#">📺 YouTube</a></li><li><a href="#">🎵 Spotify</a></li><li><a href="#">📸 Instagram</a></li></ul></div>
  </div>
  <div class="footer-bottom"><span>© 2026 La Jose En Red · Hecho con ❤️ por estudiantes</span><div class="social-links"><a href="#">📺</a><a href="#">🎵</a><a href="#">📸</a><a href="#">🎬</a></div></div>
</footer>

<script>
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 30));
  const toggle = document.getElementById('navToggle'), links = document.getElementById('navLinks');
  toggle.addEventListener('click', () => {
    links.classList.toggle('open');
    const bars = toggle.querySelectorAll('span');
    if(links.classList.contains('open')){bars[0].style.cssText='transform:rotate(45deg) translate(5px,5px)';bars[1].style.cssText='opacity:0';bars[2].style.cssText='transform:rotate(-45deg) translate(5px,-5px)';}
    else bars.forEach(b=>b.style.cssText='');
  });
  const observer = new IntersectionObserver(entries => entries.forEach((e,i) => { if(e.isIntersecting){setTimeout(()=>e.target.classList.add('visible'),i*80);observer.unobserve(e.target);} }), {threshold:.1});
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
  document.querySelectorAll('.filter-btn').forEach(btn => btn.addEventListener('click', () => { document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active')); btn.classList.add('active'); }));
</script>
</body>
</html>