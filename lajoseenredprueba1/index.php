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

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">

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

<section class="hero" aria-labelledby="hero-heading">
  <div class="hero-bg-orbs" aria-hidden="true">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>

  <div style="position:relative; z-index:2;">
    <div class="hero-badge">
      <span class="badge-dot" aria-hidden="true"></span>
      Foro Estudiantil · Institución Educativa La José Miguel De Restrepo Y Puerta
    </div>

    <h1 id="hero-heading">
      Tu Voz,<br>
      <span class="grad-text">Tu Medio.</span>
    </h1>

    <p class="hero-subtitle">
      Plataforma audiovisual estudiantil donde los jóvenes crean,
      comparten y debaten a través de podcasts, videos y contenido original.
    </p>

    <div class="hero-buttons">
      <a href="podcasts.php" class="btn-primary">🎙️ Explorar Podcasts</a>
      <a href="comunidad.php" class="btn-outline">✨ Unirme a la Comunidad</a>
    </div>

    <div class="hero-stats" role="list" aria-label="Estadísticas de la comunidad">
      <div class="stat-item" role="listitem">
        <div class="stat-num">120+</div>
        <div class="stat-label">Episodios</div>
      </div>
      <div class="stat-item" role="listitem">
        <div class="stat-num">48</div>
        <div class="stat-label">Creadores</div>
      </div>
      <div class="stat-item" role="listitem">
        <div class="stat-num">6</div>
        <div class="stat-label">Categorías</div>
      </div>
      <div class="stat-item" role="listitem">
        <div class="stat-num">2.4K</div>
        <div class="stat-label">Oyentes</div>
      </div>
    </div>
  </div>
</section>

<section id="categorias" aria-labelledby="cat-heading">
  <div class="section-header fade-in">
    <span class="section-tag">📂 Explorar</span>
    <h2 class="section-title" id="cat-heading">Todo el <span class="highlight">Contenido</span></h2>
    <p class="section-desc">Encuentra tu tema favorito entre todas las categorías que la comunidad crea cada semana.</p>
  </div>

  <div class="categories-grid fade-in" role="list">
    <?php
    $cats = [
      ['podcasts.php', '🎙️', 'Podcasts',     '0 episodios', 'podcast'],
      ['videos.php',   '🎬', 'Videos',       '0 videos',    'video'  ],
      ['debate.php',   '💬', 'Debates',      '0 foros',     'debate' ],
      ['musica.php',   '🎵', 'Música',       '0 tracks',    'musica' ],
      ['ciencia.php',  '🔬', 'Ciencia',      '0 episodios', 'ciencia'],
      ['arte.php',     '🎨', 'Arte & Cultura','0 piezas',   'arte'   ],
    ];
    foreach ($cats as [$url, $icon, $title, $count, $cat]):
    ?>
      <a href="<?= htmlspecialchars($url) ?>" class="cat-card" data-cat="<?= $cat ?>" role="listitem">
        <span class="cat-icon" aria-hidden="true"><?= $icon ?></span>
        <div class="cat-title"><?= htmlspecialchars($title) ?></div>
        <div class="cat-count"><?= htmlspecialchars($count) ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="featured-bg" id="podcasts" aria-labelledby="pod-heading">
  <div class="section-header fade-in">
    <span class="section-tag">⭐ Destacado</span>
    <h2 class="section-title" id="pod-heading">Podcasts <span class="highlight">de la Semana</span></h2>
    <p class="section-desc">Los episodios más escuchados por la comunidad estudiantil esta semana.</p>
  </div>

  <div class="podcasts-grid">

    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad:linear-gradient(135deg,#ff2d78,#a020f0);">
        🎙️<div class="play-btn-overlay" aria-hidden="true">▶</div>
      </div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">Tecnología</span>
        <h3 class="podcast-title">IA en el Aula: ¿Amiga o Enemiga?</h3>
        <p class="podcast-desc">Exploramos cómo la inteligencia artificial está transformando la educación y qué significa para los estudiantes de hoy.</p>
        <div class="podcast-meta">
          <span>🎓 Juan & María</span>
          <span class="meta-likes">❤️ 234</span>
          <span>⏱ 28 min</span>
        </div>
      </div>
    </article>

    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad:linear-gradient(135deg,#00f5ff,#0080ff);">
        🌍<div class="play-btn-overlay" aria-hidden="true">▶</div>
      </div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">Sociedad</span>
        <h3 class="podcast-title">Jóvenes que Cambian el Mundo</h3>
        <p class="podcast-desc">Historias inspiradoras de estudiantes colombianos que están construyendo proyectos de impacto social.</p>
        <div class="podcast-meta">
          <span>🎓 Equipo Jose</span>
          <span class="meta-likes">❤️ 189</span>
          <span>⏱ 35 min</span>
        </div>
      </div>
    </article>

    <article class="podcast-card fade-in">
      <div class="podcast-thumb" style="--thumb-grad:linear-gradient(135deg,#39ff14,#00b894);">
        🎵<div class="play-btn-overlay" aria-hidden="true">▶</div>
      </div>
      <div class="podcast-body">
        <span class="podcast-cat-tag">Música</span>
        <h3 class="podcast-title">Ritmos del Pacífico: Nuestra Herencia</h3>
        <p class="podcast-desc">Un viaje sonoro por la rica tradición musical del Pacífico colombiano narrado por estudiantes apasionados.</p>
        <div class="podcast-meta">
          <span>🎓 Club de Música</span>
          <span class="meta-likes">❤️ 311</span>
          <span>⏱ 42 min</span>
        </div>
      </div>
    </article>

  </div>

  <div style="text-align:center; margin-top:2.5rem;">
    <a href="podcasts.php" class="btn-outline">Ver todos los podcasts →</a>
  </div>
</section>

<section id="recientes" aria-labelledby="rec-heading">
  <div class="section-header fade-in">
    <span class="section-tag">🕐 Reciente</span>
    <h2 class="section-title" id="rec-heading">Últimos <span class="highlight">Episodios</span></h2>
    <p class="section-desc">Todo lo que se ha publicado recientemente en La Jose En Red.</p>
  </div>

  <div class="episodes-list">
    <?php
    $episodes = [
      [7, '🔬', 'Experimentos Caseros que Sorprenden',     '5 mayo 2026',   '1.2K', 'Ciencia',        '31:20'],
      [6, '📚', 'Los Libros que Todo Joven Debe Leer',     '29 abril 2026', '987',  'Literatura',     '24:05'],
      [5, '🎮', 'Videojuegos: ¿Arte o Entretenimiento?',  '22 abril 2026', '2.1K', 'Cultura Digital','38:47'],
      [4, '🌱', 'Medio Ambiente: Acciones desde la Escuela','15 abril 2026','756',  'Ambiental',      '29:11'],
      [3, '💡', 'Emprendimiento Joven en Colombia',        '8 abril 2026',  '1.5K', 'Emprendimiento', '45:00'],
    ];
    foreach ($episodes as [$id, $thumb, $title, $date, $views, $cat, $dur]):
    ?>
      <a href="episodio.php?id=<?= $id ?>" class="episode-item fade-in">
        <div class="ep-num"><?= str_pad($id, 2, '0', STR_PAD_LEFT) ?></div>
        <div class="ep-thumb" aria-hidden="true"><?= $thumb ?></div>
        <div class="ep-info">
          <div class="ep-title"><?= htmlspecialchars($title) ?></div>
          <div class="ep-meta">
            <span>📅 <?= htmlspecialchars($date) ?></span>
            <span>👁️ <?= htmlspecialchars($views) ?> vistas</span>
            <span><?= htmlspecialchars($cat) ?></span>
          </div>
        </div>
        <div class="ep-duration"><?= htmlspecialchars($dur) ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="cta-section" id="comunidad" aria-labelledby="cta-heading">
  <div class="cta-card fade-in">
    <span class="cta-emoji" aria-hidden="true">🚀</span>
    <h2 id="cta-heading">¿Tienes algo que
      <span style="background:linear-gradient(135deg,var(--neon-pink),var(--neon-cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">contar?</span>
    </h2>
    <p>Únete a La Jose En Red y empieza a crear tu propio podcast, video o artículo. ¡Tu voz merece ser escuchada!</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="registro.php" class="btn-primary">🎙️ Empieza a Crear</a>
      <a href="nosotros.php" class="btn-outline">Conoce el Equipo</a>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>

</body>
</html>